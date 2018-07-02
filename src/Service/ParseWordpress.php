<?php
/*
 * Copyright (c) Andreas Heigl
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapper\Service;

use SplFileInfo;
use Symfony\Component\Console\Output\OutputInterface;

class ParseWordpress
{
    private $downloader;

    private $extractor;

    private $finder;

    private $functionFinder;

    private $wrapper;

    private $versionFinder;

    public function __construct(
        DownloadWordPressVersion $downloader,
        ExtractZipFileToFolder $extractor,
        FindPhpFilesInExtractedCode $finder,
        FindFunctionsInFileList $functionFinder,
        CreateWrapperFile $wrapper,
        GetWordpressVersion $versionFinder
    ) {
        $this->downloader     = $downloader;
        $this->extractor      = $extractor;
        $this->finder         = $finder;
        $this->functionFinder = $functionFinder;
        $this->wrapper        = $wrapper;
        $this->versionFinder  = $versionFinder;
    }

    public function parse(string $version, OutputInterface $output) : SplFileInfo
    {
        $output->writeln(sprintf('Downloading Wordpress %s', $version));
        $downloadedZipFile = ($this->downloader)($version);
        $output->writeln(sprintf('Extracting Wordpress'));
        $folderLocation    = ($this->extractor)($downloadedZipFile);
        $output->writeln(sprintf('Fetching PHP-Files'));
        $fileList          = ($this->finder)($folderLocation);
        $output->writeln(sprintf('Finding functions in %s PHP-Files', $fileList->count()));
        $functionList      = ($this->functionFinder)($fileList);

        $output->writeln(sprintf('creating wrapper class for %s functions', $functionList->count()));
        return ($this->wrapper)($functionList, ($this->versionFinder)($fileList));
    }
}

<?php
/*
 * Copyright (c) Andreas Heigl
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapper\Service;

use Org_Heigl\FileFinder\FileFinder;
use Org_Heigl\FileFinder\FileListInterface;
use Org_Heigl\FileFinder\Filter\FileExtension;
use Org_Heigl\FileFinder\Filter\Not;
use SplFileInfo;

class FindPhpFilesInExtractedCode
{
    private $finder;

    public function __construct(FileFinder $finder)
    {
        $this->finder = $finder;
    }

    public function __invoke(SplFileInfo $directory) : FileListInterface
    {
        $this->finder->addDirectory($directory->getRealPath());
        $this->finder->addFilter(new FileExtension('php'));

        return $this->finder->find();
    }
}

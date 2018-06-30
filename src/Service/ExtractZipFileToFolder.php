<?php
/*
 * Copyright (c) Andreas Heigl
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapper\Service;

use Org_Heigl\WordpressWrapper\Exception\UnableToOpenZipFile;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplDoublyLinkedList;
use SplFileInfo;
use ZipArchive;

class ExtractZipFileToFolder
{
    private $folder;

    public function __invoke(SplFileInfo $zipfile) : SplFileInfo
    {
        $zip = new ZipArchive();
        $res = $zip->open($zipfile->getRealPath());
        if ($res !== TRUE) {
            throw new UnableToOpenZipFile();
        }

        $hash = sha1(random_bytes(40));
        $file = sys_get_temp_dir() . DIRECTORY_SEPARATOR . $hash;
        $zip->extractTo($file);
        $zip->close();

        $wpContent = $file . DIRECTORY_SEPARATOR . 'wordpress' . DIRECTORY_SEPARATOR . 'wp-content';
        if (is_dir($wpContent)) {
            $this->deleteFolder($wpContent);
        }

        $this->folder = new SplFileInfo($file);

        return $this->folder;
    }

    public function __destruct()
    {
        if (null === $this->folder) {
            return;
        }

        if (! $this->folder instanceof SplFileInfo) {
            return;
        }

        if (! $this->folder->isDir()) {
            return;
        }

        $this->deleteFolder($this->folder);
    }

    private function deleteFolder($folder)
    {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($folder, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $fileinfo) {
            $todo = ($fileinfo->isDir() ? 'rmdir' : 'unlink');
            $todo($fileinfo->getRealPath());
        }

        rmdir($folder);
    }
}

<?php
/*
 * Copyright (c) Andreas Heigl
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapper\Service;

use Org_Heigl\FileFinder\FileListInterface;

class GetWordpressVersion
{
    public function __invoke(FileListInterface $filelist) : string
    {
        foreach ($filelist as $file) {
            if ($file->getFileName() !== 'version.php') {
                continue;
            }

            require_once $file->getRealPath();
        }
        if (! isset($wp_version)) {
            $wp_version = '0.0.0';
        }
        return $wp_version;
    }
}

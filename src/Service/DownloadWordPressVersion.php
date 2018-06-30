<?php
/*
 * Copyright (c) Andreas Heigl
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapper\Service;

use SplFileInfo;

class DownloadWordPressVersion
{
    private $zipfile;

    public function __invoke($version) : SplFileInfo
    {
        if ($this->zipfile === null) {
            $hash          = sha1(random_bytes(40));
            $this->zipfile = sys_get_temp_dir() . '/' . $hash . '.zip';
        }
        copy('https://wordpress.org/latest.zip', $this->zipfile);

        return new SplFileInfo($this->zipfile);
    }

    public function __destruct()
    {
        if (null === $this->zipfile) {
            return;
        }

        if (is_file($this->zipfile)) {
            unlink($this->zipfile);
        }
    }
}

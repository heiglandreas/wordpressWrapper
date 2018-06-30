<?php
/*
 * Copyright (c) Andreas Heigl
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapperTest;

use finfo;
use Org_Heigl\WordpressWrapper\Service\DownloadWordPressVersion;
use PHPUnit\Framework\TestCase;

class DownloadWordPressVersionTest extends TestCase
{

    public function testDestruction()
    {
        $service = new DownloadWordPressVersion();
        $zipfile = $service('latest');
        unset($service);

        self::assertFileNotExists($zipfile->getRealPath());
    }

    public function testInvokation()
    {
        $service = new DownloadWordPressVersion();

        $zipfile = $service('latest');

        self::assertFileExists($zipfile->getRealPath());
    }
}

<?php
/*
 * Copyright (c) Andreas Heigl
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapper\Service;

use Exception;
use Org_Heigl\FileFinder\FileListInterface;
use Org_Heigl\WordpressWrapper\Lists\Functions;
use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\FunctionReflector;
use Roave\BetterReflection\SourceLocator\Type\FileIteratorSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator;

class FindFunctionsInFileList
{
    public function __invoke(FileListInterface $fileList)
    {
        $functionList = new Functions();

        $configuration = new BetterReflection();
        $astLocator = $configuration->astLocator();
        $classReflector = $configuration->classReflector();

        foreach ($fileList as $file) {
            $locator   = new SingleFileSourceLocator(
                $file->getRealPath(),
                $astLocator
            );
            $reflector = new FunctionReflector($locator, $classReflector);
            $functions = $reflector->getAllFunctions();

            foreach ($functions as $function) {
                $functionList->add($function);
            }
        }

        return $functionList;
    }
}

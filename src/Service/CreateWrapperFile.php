<?php
/*
 * Copyright (c) Andreas Heigl
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapper\Service;

use Exception;
use Org_Heigl\WordpressWrapper\Lists\Functions;
use phpDocumentor\Reflection\Type;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionParameter;
use SplFileInfo;

class CreateWrapperFile
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function __invoke(Functions $functionList, string $version) : SplFileInfo
    {
        $functionList->sort();

        $header = <<<EOF
<?php

/*
 * Autocreated via wordpress-Wrapper
 *
 * Created for WordPress Version %s
 *
 * This File needs add least PHP 5.6 due to the '...'-token!
 *
 * See https://heiglandreas.github.io/wordpressWrapper/ for more information
 */

namespace Org_Heigl\WordPressWrapper;

/**

EOF;
        $file = sprintf($this->filePath, $version);
        echo $file;
        if (! is_dir(dirname($file))) {
            mkdir(dirname($file), 0777, true);
        }
        $handle = fopen($file, 'w');
        fwrite($handle, sprintf($header, $version));

        /** @var \Roave\BetterReflection\Reflection\ReflectionFunction $function */
        foreach ($functionList as $function) {

            // Wordpress functions that are considered private are prefixed with an '_' …
            if (0 === strpos($function->getName(), '_')) {
                continue;
            }
            try {
                $functionParameters = [];
                foreach ($function->getParameters() as $parameter) {
                    $functionParameters[] = $this->getParameterDefinition($parameter);
                }

                $functionSignature = sprintf(
                    '%1$s (%2$s)',
                    $function->getName(),
                    implode(', ', $functionParameters)
                );
                fwrite($handle, sprintf(
                    '* @method %1$s %2$s https://developer.wordpress.org/reference/functions/%3$s',
                    $this->getFunctionReturnTypes($function),
                    $functionSignature,
                    $function->getName()
                ) . "\n");
            } catch (Exception $e) {
                error_log($e->getMessage() . "\n" . $e->getTraceAsString());
            }
        }

        fwrite($handle, " */\nclass WordPress\n{\n    public function __call(\$name, \$parameters) {\n        return \$name(...\$parameters);\n    }\n}\n");
        fclose($handle);

        return new SplFileInfo($this->filePath);
    }

    private function getParameterDefinition(ReflectionParameter $parameter) : string
    {
        $string = [];
        $types = null;
        try {
            $types = $parameter->getDocBlockTypeStrings();
        } catch (Exception $e) {}

        if ($types) {
            $string[] = implode('|', $types);
        }

        $string[] = '$' . $parameter->getName();

        if ($parameter->isDefaultValueAvailable()) {
            $string[] = '= ' . $this->getStringRepresentation($parameter->getDefaultValue());
        }

        return implode(' ', $string);
    }

    private function getFunctionReturnTypes(ReflectionFunction $function) : string
    {
        if ($function->hasReturnType()) {
            return $function->getReturnType();
        }

        $returnTypes = [];
        try {
            $returnTypes = array_map(function (Type $item) {
                return (string) $item;
            }, $function->getDocBlockReturnTypes());
        } catch (Exception $e) {
            error_log(sprintf(
                'Problem getting return type for function "%1$s"',
                $function->getName()
            ));
        }
        if (! $returnTypes) {
            $returnTypes = ['void'];
        }

        return implode('|', $returnTypes);
    }

    private function getStringRepresentation($value) : string
    {
        switch (gettype($value)) {
            case 'boolean':
                return $value?'true':'false';
            case 'integer':
                return (string) $value;
            case 'double':
                return (string) $value;
            case 'NULL':
                return 'NULL';
            case 'array':
                return '[' . implode(', ', array_map([$this, 'getStringRepresentation'], $value)) . ']';
            case 'string':
            default:
                return '\'' . (string) $value . '\'';
        }
    }
}

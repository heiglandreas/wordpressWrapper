<?php
/*
 * Copyright (c) Andreas Heigl
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapper\Lists;

use Countable;
use Iterator;
use Org_Heigl\IteratorTrait\IteratorTrait;
use Roave\BetterReflection\Reflection\ReflectionFunction;

class Functions implements Iterator, Countable
{
    use IteratorTrait;

    private $list;

    public function __construct()
    {
        $this->list = [];
    }

    public function add(ReflectionFunction $function) : void
    {
        $this->list[$function->getName()] = $function;
    }

    public function sort() : void
    {
        uksort($this->list, 'strnatcasecmp');
    }

    protected function & getIterableElement()
    {
        return $this->list;
    }

    public function count() : int
    {
        return count($this->list);
    }

}

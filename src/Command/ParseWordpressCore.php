<?php

/*
 * Copyright (c) Andreas Heigl
 *
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\WordpressWrapper\Command;

use Org_Heigl\WordpressWrapper\Service\ParseWordpress;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ParseWordpressCore extends Command
{
    public function __construct(ParseWordpress $parser)
    {
        $this->parser = $parser;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('parse')
            ->setDescription('parse wordpress core')
            ->setHelp('This command allows you to parse a specific wordpress version and create a wrapper file')
            ->addArgument('version', InputArgument::OPTIONAL, 'Which version of wordpress shall we create the class for?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $version = $input->getArgument('version');
        if (null === $version) {
            $version = 'latest';
        }

        $this->parser->parse($version, $output);
    }

}

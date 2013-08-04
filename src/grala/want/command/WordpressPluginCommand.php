<?php 

namespace Grala\Want\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Yaml\Parser;


class WordpressPluginCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('wordpress:plugin')
            ->setDescription('Create a wordpress plugin | Not working yet')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Name the plugin'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        if (!$name) {
            $name = 'boilerplate';
        } 

        $text = 'Creating the plugin '.$name.'...';
        $output->writeln($text);

    }



}

 ?>
<?php 

namespace Grala\Want\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Grala\Want\Generator\JoomlaComponentGenerator;


class JoomlaComponentCommand extends Command
{

    protected function configure()
    {
        $this
            ->setName('joomla:component')
            ->setDescription('Create a Joomla component v2.5')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Name the component'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        return new JoomlaComponentGenerator($name);

    }

   


}

 ?>
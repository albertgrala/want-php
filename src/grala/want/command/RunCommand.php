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

use Grala\Want\Generator\JoomlaComponentGenerator;


class RunCommand extends Command
{

    protected $configFile = 'config.yml';

    protected $config;

    protected function configure()
    {
        $this
            ->setName('run')
            ->setDescription('Generates projects from the config file')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = 'Creating the projects...';
        $output->writeln($text);

        $yaml = new Parser();
        $this->config = $yaml->parse(file_get_contents($this->configFile));

        $this->generate();

    }

    protected function generate()
    {
        if (isset($this->config['joomla'])) {
            $this->generateJoomla();
        }
    }

    protected function generateJoomla()
    {
        if (isset($this->config['joomla']['component'])) {
            foreach($this->config['joomla']['component'] as $component) {
                $JoomlaComponentGenerator = new JoomlaComponentGenerator($component);
            }
        }
    }


}

 ?>
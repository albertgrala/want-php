<?php

use Grala\Want\Command\JoomlaComponentCommand;
use Grala\Want\Command\WordpressPluginCommand;
use Grala\Want\Command\RunCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new JoomlaComponentCommand);
$application->add(new WordpressPluginCommand);
$application->add(new RunCommand);
$application->run();


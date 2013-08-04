<?php

namespace Grala\Want\Generator;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Yaml\Parser;

class JoomlaComponentGenerator 
{
    protected $folderPrefix = 'com_';
    protected $component;
    protected $componentName = 'boilerplate';
    protected $dumpPath = 'build/joomla';
    protected $folder;
    protected $tmpl = 'app/tmpls/joomla.component.2_5';
    protected $fs;


    public function __construct($name)
    {
        if ($name) {
            $this->componentName = strtolower($name);
        }
        $this->execute();
    }

    protected function execute()
    {
        $this->component = $this->folderPrefix . $this->componentName;
        $this->folder = $this->dumpPath.'/'.$this->component;

        $this->fs = new Filesystem();

        $this->createFiles();
    }

    protected function createFiles()
    {
        if (!$this->fs->exists($this->folder)) {
            $this->fs->mkdir($this->folder);
            
            $yaml = new Parser();
            $config = $yaml->parse(file_get_contents($this->tmpl.'.yml'));

            foreach($config['basic_files'] as $filePath) {
                $this->createFile($filePath);
            }
        }

    }

    private function createFile($filePath) 
    {
        $file = file_get_contents($this->tmpl.'/'.$filePath);
        $file = $this->replace($file,$this->componentName);
        $filePath = preg_replace('/{{name}}/',$this->componentName,$filePath);
        $this->fs->dumpFile($this->dumpPath.'/'.$this->component.'/'.$filePath, $file);

    }

    private function replace($file)
    {
        $file = preg_replace('/{{name}}/',$this->componentName,$file);
        $file = preg_replace('/{{NAME}}/',strtoupper($this->componentName),$file);
        $file = preg_replace('/{{Name}}/',ucfirst($this->componentName),$file);
        return $file;
    }
}

?>
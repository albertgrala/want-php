# Want PHP

Want will generate the boilerplate for your php projects. 
You will find all the code generated in the `build` folder.

## Installation

Make sure you have [composer](http://getcomposer.org/) and [git](http://git-scm.com/) installed in your computer.

1. Download Want by typing ``git clone https://github.com/albertgrala/want-php.git`` in your command line
2. Run Composer ``composer install``
3. Enjoy Want

## Example

Generate a Joomla 2.5 component. Let's name it *analytics*

1. Type `php want joomla:component analytics`
2. In the folder `build\joomla` you will find your component folder `com_analytics` with all the files you need
3. Start working with your component 

## Commands

Type in your terminal ``php want list`` to see the available commands

| Command              | Description               | Arguments |
| -------------------- | ------------------------- | --------- |
| ``joomla:component`` | Create a joomla component | name      |


## Config.yml

You can generate the files for your project by typing a specific command or
you can set everything you need in the ``config.yml``

Example of config.yml file:

```yaml
joomla:
  component:
  - mycomp
  - mycompseo
  - mycompanalytics
```

Then type ``php want run`` to generate everything. 
In this example we will generate 3 Joomla components


## Todo

+ Refactor
+ Make it testeable
+ Write the tests
+ Write wordpress commands and create the templates
+ Write joomla commands and create the templates
+ Create readme_es.md file

### Wordpress

+ Command to generate a plugin ``wordpress:plugin``
+ Command to generate a widget ``wordpress:widget``
+ Command to generate a theme ``wordpress:theme``

### Joomla

+ Command to generate a plugin ``joomla:plugin``
+ Command to generate a module ``joomla:module``
+ Command to generate a template ``joomla:template``
+ Generate code for multiple Joomla versions (2.5,3) using flags. i.e. ``php want joomla:component mycomp --v3``

## Contribution

You are more than welcome to contribute to this project, just submit a pull request.
Create a new Issue and label it `feature` or `question` and there we can talk about the project.
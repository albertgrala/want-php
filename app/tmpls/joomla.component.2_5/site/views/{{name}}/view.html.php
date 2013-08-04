<?php

defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');

class {{Name}}View{{Name}} extends JView{

  protected $items;

  public function display($tpl = null)
  {
    $model = $this->getModel('{{name}}');
    parent::display($tpl);
  }

}
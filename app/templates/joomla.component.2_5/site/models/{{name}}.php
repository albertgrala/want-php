<<?php

defined('_JEXEC') or die();
jimport('joomla.application.component.modellist');
class {{Name}}Model{{Name}} extends JModelList
{
  protected $info = array(); 
  
  public function getListQuery()
  {
    $query = parent::getListQuery();
    return $query;
  }

}
?>

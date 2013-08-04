<?php
defined( '_JEXEC' ) or die;

class {{Name}}TableItem extends JTable
{
  public function __construct(&$db)
  {
    parent::__construct('#__items', 'id', $db);
  }

  public function check()
  {
    
    return true;
  }
}
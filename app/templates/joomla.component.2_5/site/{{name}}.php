<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');


$controller = JController::getInstance('{{Name}}');
// Execute the task
$controller->execute( JRequest::getVar( 'task' ) );
$controller->redirect();
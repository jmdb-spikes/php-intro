<?php 
 
error_reporting(E_ALL|E_STRICT); 
ini_set('display_errors', 1); 
date_default_timezone_set('Europe/London'); 
 
// directory setup and class loading 
set_include_path('.' . PATH_SEPARATOR . '../../../lib/'
     . PATH_SEPARATOR . '../application/models'
     . PATH_SEPARATOR . get_include_path()); 
//include "Zend/Loader.php";
//Zend_Loader::registerAutoload(); 
require_once('Zend/Loader/Autoloader.php');
Zend_Loader_Autoloader::getInstance();

// setup controller 
$frontController = Zend_Controller_Front::getInstance(); 
$frontController->throwExceptions(true); 
$frontController->setControllerDirectory('../application/controllers'); 
 
// run! 
$frontController->dispatch(); 

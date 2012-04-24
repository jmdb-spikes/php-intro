<?php

error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/London');

// directory setup and class loading
set_include_path('.' . PATH_SEPARATOR . '../../lib/'     
     . PATH_SEPARATOR . get_include_path());

require_once 'Zend/Rest/Server.php';

/**
* Say Hello
*
* @param string $who
* @param string $when
* @return SimpleXMLElement
*/
function sayHello($who, $when)
{
    $xml ='<?xml version="1.0" encoding="ISO-8859-1"?>
    <mysite>
        <value>Hey '. $who .'! Hope you\'re having a good '. $when .'</value>
        <code>200</code>
    </mysite>';

    $xml = simplexml_load_string($xml);
    return $xml;
}

$server = new Zend_Rest_Server();
$server->addFunction("sayHello");

$server->handle();


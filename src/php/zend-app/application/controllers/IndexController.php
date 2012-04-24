<?php

class IndexController extends Zend_Controller_Action
{
    function indexAction()
    {
        $this->view->title = "My First Zend Controller"; 
		$baseUri = $this->getRequest()->getBaseUrl();
		$baseUri = str_replace("/zend-app/public", "", $baseUri );
 		$this->view->assign('baseUri', $baseUri);
    }

    
}

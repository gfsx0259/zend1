<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $guestbook = new Default_Model_Guestbook();
        $this->view->entries = $guestbook->fetchAll();
        // action body
    }

    public function demoAction()
    {
        // action body
        die("demo");
    }



}


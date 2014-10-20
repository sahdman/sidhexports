<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CoreTech_Utils_AjaxController extends Mage_Core_Controller_Front_Action
{
    public function sayHelloAction()
    {
//        echo 'Hello Ajax Request';
//        var_dump($this->getRequest()->getParams());
//        echo 'Endong';
        
        $this->loadLayout();
        
        header('Content-Type: text-xml');
        die($this->getLayout()->getNode()->asXML());
        print_r($this->getLayout()->getUpdate()->getHandles());
        
        $this->renderLayout();
    }
}
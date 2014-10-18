<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'app/Mage.php';

Mage::app();

$Utils = new CoreTech_Utils_Helper_Utils();

$Utils->sayHello();
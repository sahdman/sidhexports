<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL);

require_once 'app/Mage.php';

Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);

Mage::app();

echo '<h1>Shadman Magento Test class</h1>';

//$Utils = new CoreTech_Utils_Helper_Utils();
//$Utils = Mage::helper('Utils');
//$Utils->sayHello();

$category = Mage::getModel('catalog/category')->load(2);
var_dump($category->getChildren());

$product = Mage::getModel('catalog/product')->load(2);
//var_dump($product);
$block = Mage::app()->getLayout()->createBlock('catalog/product_list');
//print_r($block);
$html = $block->getReviewsSummaryHtml($product, 'short', true);

echo $html . "<br/>";
var_dump( $block->renderView());

$block = Mage::app()->getLayout()->createBlock('catalog/product_price');
$data = $block->getPriceHtml($product);
print_r($data);

echo $data;

echo '<h1>Shadman Magento Test class End</h1>';
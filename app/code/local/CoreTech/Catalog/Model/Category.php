<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CoreTech_Catalog_Model_Categoty extends Mage_Catalog_Model_Category
{
    /**
     * Retrieve children ids comma separated
     *
     * @return string
     */
    public function getChildren()
    {
        return $this->getResource()->getChildren($this, false);
    }
}
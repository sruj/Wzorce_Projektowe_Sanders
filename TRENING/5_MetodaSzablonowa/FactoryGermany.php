<?php
include_once './CreatorFactory.php';

class FactoryGermany extends CreatorFactory{
    
    public function go() {
        (new ProductGermany())->getProperties();
    }
}

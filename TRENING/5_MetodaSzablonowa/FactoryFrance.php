<?php
include_once './CreatorFactory.php';

class FactoryFrance extends CreatorFactory{
    
    public function go() {
        (new ProductFrance())->getProperties();
    }
}

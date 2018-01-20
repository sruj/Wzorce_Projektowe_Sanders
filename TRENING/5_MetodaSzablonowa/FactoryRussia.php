<?php
include_once './CreatorFactory.php';
class FactoryRussia extends CreatorFactory{
    
    public function go() {
        (new ProductRussia())->getProperties();
    }
}

<?php
include_once './CreatorFactory.php';

class FactoryPoland extends CreatorFactory{
    
    public function go() {
        (new ProductPoland())->getProperties();
    }
}

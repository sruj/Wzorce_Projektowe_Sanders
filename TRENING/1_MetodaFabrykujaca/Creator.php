<?php

abstract class Creator {
    abstract function factoryMethod();
    
    public function startFactory() {
        $product = $this->factoryMethod();
        return $product;        
    }
    
}

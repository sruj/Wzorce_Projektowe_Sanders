<?php

class ConcreteCreator extends Creator{
    
    public function factoryMethod() {
        $product = new ConcreteProduct();
        return $product->getProperties();
    }
    
}

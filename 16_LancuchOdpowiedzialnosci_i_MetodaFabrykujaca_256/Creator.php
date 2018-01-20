<?php

abstract class Creator {

    abstract function factoryMethod(Product $product);

    public function feedFactory($productNow) {
        $properties = $this->factoryMethod($productNow);
        return $properties;
    }

}

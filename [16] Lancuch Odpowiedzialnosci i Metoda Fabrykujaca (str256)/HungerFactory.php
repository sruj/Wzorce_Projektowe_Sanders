<?php

class HungerFactory extends Creator {

    public function factoryMethod(Product $product) {
        return $product->getProperties();
    }

}

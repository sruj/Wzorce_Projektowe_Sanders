<?php
//Jak widać, w klasie abstrakcyjnej  Creator obie metody,  factoryMethod() i  startFactory() ,
//wymagają podania parametru. Co więcej, ponieważ podpowiedź typu wymaga obiektu typu
//Product , a nie implementacji produktu, może być wykorzystana z dowolną konkretną in-
//stancją typu  Product .


abstract class Creator {

    protected abstract function factoryMethod(Product $product);

    public function doFactory($productNow) {
        $countryProduct = $productNow;
        $mfg = $this->factoryMethod($countryProduct);
        return $mfg;
    }

}

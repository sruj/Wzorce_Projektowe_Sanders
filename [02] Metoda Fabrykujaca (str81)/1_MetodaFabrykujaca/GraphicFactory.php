<?php
//-konkretna implementacja metody factoryMethod() musi stworzyć instancję obiektu 
//implementowanego z interfejsu Product
//-iplementacja metody  factoryMethod()  zwraca produkt graficzny lub tekstowy
//za pośrednictwem metody klasy  Product —  getProperties().

include_once('Creator.php');
include_once('GraphicProduct.php');

class GraphicFactory extends Creator {

    protected function factoryMethod() {
        $product = new GraphicProduct();
        return($product->getProperties());
    }
}

<?php
//Konkretna klasa  CountryCreator implementuje metodę  factoryMethod() z odpowiednim
//parametrem przy wykorzystaniu podpowiadania typów. Oczywiście klasa dziedziczy metodę
//startFactory() , która będzie wykorzystywana w klasie  Client

//Klasa  CountryCreator zawiera prywatną zmienną,  $country , która przechowuje produkt
//żądany przez klienta. Następnie za pośrednictwem metody  getProperties() zwracany jest
//stworzony produkt.

include_once('Creator.php');
include_once('Product.php');

class CountryFactory extends Creator {

    private $country;

    protected function factoryMethod(Product $product) {
        $this->country = $product;
        return($this->country->getProperties());
    }

}

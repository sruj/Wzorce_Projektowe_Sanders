<?php

abstract class Decorator extends IComponent{
    //Dziedziczy metody getSite() i getPrice()
    //Jest to klasa abstrakcyjna i
    //nie ma konieczności implementacji żadnej z metod
    //Chodzi o to, aby zachować referencję do klasy Component
    //public function getSite() { }
    //public function getPrice() { }
}

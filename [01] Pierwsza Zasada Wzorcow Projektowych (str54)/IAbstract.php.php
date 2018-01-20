<?php

abstract class IAbstract {

//Właściwość dostępna dla wszystkich implementacji
    protected $valueNow;

    /* Wszystkie implementacje muszą zawierać dwie poniższe metody: */

//Musi zwracać wartość typu decimal
    abstract protected function giveCost();

//Musi zwracać wartość typu string
    abstract protected function giveCity();

//Ta funkcja konkretna dostępna jest dla wszystkich
//implementacji, o ile nie zostanie zastąpiona
    public function displayShow() {
        $stringCost = $this->giveCost();
        $stringCost = (string) $stringCost;
        $allTogether = ("Koszt: $" . $stringCost . " dla " . $this->giveCity());
        return $allTogether;
    }

}

?>
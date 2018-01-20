<?php

//NorthRegion.php
include_once('IAbstract.php');

class NorthRegion extends IAbstract {

//Musi zwracać wartość typu decimal
    protected function giveCost() {
        return 210.54;
    }

//Musi zwracać wartość typu string
    protected function giveCity() {
        return "Moose Breath";
    }

}

?>
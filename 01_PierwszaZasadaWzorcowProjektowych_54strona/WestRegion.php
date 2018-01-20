<?php

//WestRegion.php
include_once('IAbstract.php');

class WestRegion extends IAbstract {

//Musi zwracać wartość typu decimal
    protected function giveCost() {
        $solarSavings = 2;
        $this->valueNow = 210.54 / $solarSavings;
        return $this->valueNow;
    }

//Musi zwracać wartość typu string
    protected function giveCity() {
        return "Rattlesnake Gulch";
    }

}

?>
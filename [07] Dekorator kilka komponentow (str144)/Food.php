<?php

//Food.php
//konkretny dekorator
class Food extends Decorator {

    private $chowNow;

    public function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
        $this->getDate();
    }

    private $snacks = array("piz" => "Pizza",
        "burg" => "Hamburgery",
        "nach" => "Nachosy",
        "veg" => "Warzywa");

    public function setFeature($yum) {
        $this->chowNow = $this->snacks[$yum];
    }

    public function getFeature() {
        $output = $this->date->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;";
        $output .="$fmat Ulubione jedzenie: ";
        $output .= $this->chowNow . "<br/>";
        return $output;
    }

}

?>
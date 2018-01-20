<?php

class BasicSite extends IComponent{

    public function __construct() {
        $this->site = "Podstawowa wersja";
    }
    public function getSite() {
        return $this->site;
    }
    public function getPrice() {
        return 1200;
    }
    
}

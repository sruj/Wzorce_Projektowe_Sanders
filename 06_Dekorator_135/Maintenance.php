<?php

class Maintenance extends Decorator{

    public function __construct(IComponent $param) {
        $this->site = $param;
    }

    public function getSite() {
        $fmat = "<br/>&nbsp;&nbsp; Obsługa ";
        return $this->site->getSite() . $fmat;
    }
    public function getPrice() {
        return 950 + $this->site->getPrice();
    }
}

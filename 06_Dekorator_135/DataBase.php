<?php

class DataBase extends Decorator {

    public function __construct(IComponent $param) {
        $this->site = $param;
    }

    public function getSite() {
        $fmat = "<br/>&nbsp;&nbsp; Baza danych ";
        return $this->site->getSite() . $fmat;
    }
    public function getPrice() {
        return 550 + $this->site->getPrice();
    }

}

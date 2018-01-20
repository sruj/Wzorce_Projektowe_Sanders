<?php

class Video extends Decorator{

    public function __construct(IComponent $param) {
        $this->site = $param;
    }

    public function getSite() {
        $fmat = "<br/>&nbsp;&nbsp; Wideo ";
        return $this->site->getSite() . $fmat;
    }
    public function getPrice() {
        return 350 + $this->site->getPrice();
    }
}

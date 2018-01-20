<?php

class C4 implements Product{
    private $mfgProduct;
    
    public function getProperties() {
        $this->mfgProduct ="<img src='./pics/4.jpg' >";
        return $this->mfgProduct;
    }
}

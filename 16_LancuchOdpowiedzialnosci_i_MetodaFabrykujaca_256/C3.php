<?php

class C3 implements Product{
    private $mfgProduct;
    
    public function getProperties() {
        $this->mfgProduct ="<img src='./pics/3.jpg' >";
        return $this->mfgProduct;
    }
}

<?php

class C2 implements Product{
    private $mfgProduct;
    
    public function getProperties() {
        $this->mfgProduct ="<img src='./pics/2.jpg' >";
        return $this->mfgProduct;
    }
}

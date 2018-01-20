<?php

class C1 implements Product{
    private $mfgProduct;
    
    public function getProperties() {
        $this->mfgProduct ="<img src='./pics/1.jpg' >";
        return $this->mfgProduct;
    }
}

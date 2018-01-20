<?php

class Dollar {
    private $service;
    private $product;
    private $cashDollar;
    private $rate = 1;
    
    public function setPar($p1,$p2) {
        $this->product = $p1;
        $this->service = $p2;
        $this->cashDollar = $this->product + $this->service;
        
        return $this->count($this->cashDollar);
    }
    
    public function count() {
        return $this->cashDollar *= $this->rate ;
    }
    
}

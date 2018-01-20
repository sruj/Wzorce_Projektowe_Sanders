<?php

class Euro {
    private $service;
    private $product;
    private $cashEuro;
    protected $rate = 1;
    
    public function setPar($p1,$p2) {
        $this->product = $p1;
        $this->service = $p2;
        $this->cashEuro = $this->product + $this->service;
        
        return $this->count($this->cashEuro);
    }
    
    public function count() {
        return $this->cashEuro *= $this->rate ;
    }
    
}

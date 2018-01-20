<?php

abstract class AbstractClass {
    protected $obrazek;
    protected $podpis;


    public function templateMethod($obrazek, $podpis){
        $this->obrazek=$obrazek;
        $this->podpis=$podpis;
        
        $this->putObrazek($this->obrazek);
        $this->putPodpis($this->podpis);
    }
    
    abstract protected function putObrazek($obrazek);
    abstract protected function putPodpis($podpis);
    
}

<?php

include_once './IDekorator.php';

class StrtolowerDek extends IDekorator{
    
        
    public $komponent;
    public $string;
    
    
    public function __construct(IKomponent $komponent) {
        $this->komponent = $komponent;
    }
        
    
    public function changeString() {
        $this->string = $this->komponent->getString();
        $this->string = $this->komponent->changeString();
        $this->string = strtolower($this->string);//Make a string lowercase
        
        return $this->string;
    }
    
    
}

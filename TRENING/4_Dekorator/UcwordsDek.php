<?php

include_once './IDekorator.php';

class UcwordsDek extends IDekorator{
    
   
    
    public $komponent;
    public $string;
    
    
    public function __construct(IKomponent $komponent) {
        $this->komponent = $komponent;
    }
        
    
    public function changeString() {
        $this->string = $this->komponent->getString();
        $this->string = $this->komponent->changeString();
        $this->string = ucwords($this->string);//Uppercase the first character of each word in a string
                
        return $this->string;
        
    }    
    
    
}

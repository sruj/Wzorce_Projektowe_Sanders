<?php

include_once './IDekorator.php';

class Substr_replaceDek extends IDekorator {
    
    public $komponent;
    public $string;
    
    
    public function __construct(IKomponent $komponent) {
        $this->komponent = $komponent;
    }
        
    
    public function changeString() {
        $this->string = $this->komponent->getString();
        $this->string = $this->komponent->changeString();
        $this->string = substr_replace($this->string, 'bob ', 0, 0);//Insert 'bob' right at the beginning of $var.
                
        return $this->string;
        
    }
    
}

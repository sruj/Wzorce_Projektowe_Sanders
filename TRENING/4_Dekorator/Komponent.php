<?php
include_once './IKomponent.php';

class Komponent implements IKomponent{
    
    public $string;
    
    public function setString($string){
        $this->string = $string;
    }
    
    public function changeString() {
        $this->string = trim($this->string);//Strip whitespace (or other characters) from the beginning and end of a string
        
        return $this->string;
    }
    
    public function getString() {
        return $this->string;
    }
}

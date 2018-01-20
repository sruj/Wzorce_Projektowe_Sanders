<?php
function __autoload($class_name){
    include $class_name . '.php';
}

class Client {
    
    public function __construct() {
        
        
        $string = " mija more Mija MorE ";
                
        $k = new Komponent();
        $k->setString($string);
        $k->changeString();
        
        $go = $this->wrap($k);
        
        
        echo "start:".$go.":meta";
    }
    
    public function wrap($komponent) {
        
        $s = new UcwordsDek(new Substr_replaceDek(new StrtolowerDek($komponent)));
        
        return $s->changeString();
    }

    
}
(new Client());
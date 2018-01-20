<?php

function __autoload($class_name){
    include $class_name . '.php';
}
//będzie drukowała każda funkcja:
//Rosja, Niemcy, Francja, Polska
//hook-gdy $parametr true to Polska wygra z Francją.
//rosja polska w faktory wschód, niemcy francja zachód.
class Client {
    public function __construct() {
        $oddevenLottery = $this->japan();
        
        echo "miejsca 1-4:<br>";
        (new Szablon())->templateMethod($oddevenLottery);
    }
    
    private function japan(){
        //parzysta czy nieparzysta sekunda
        return date("s") % 2 == 0;
    }
}

(new Client());
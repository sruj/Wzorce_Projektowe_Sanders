<?php
include_once './EuroAdapter.php';
include_once './Dollar.php';


class Client {
    public $d;
    public $e;
    
    public function __construct() {
        $this->d = new Dollar();
        $this->e = new EuroAdapter();
        
        
        echo "w dolcach :".$this->makeD($this->d);
        echo "<br>w eurach :".$this->makeE($this->e);
    }
    
    public function makeD(Dollar $param) {
        return $param->setPar(40, 60);
    }
    
    public function makeE(IEuro $param) {
        return $param->setPar(40, 60);
    }
}


$run = new Client;
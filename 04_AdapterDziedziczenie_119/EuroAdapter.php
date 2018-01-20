<?php
include_once './Euro.php';
include_once './IEuro.php';

class EuroAdapter extends Euro implements IEuro{

    public function __construct() {
        $this->rateCh();
    }
    
    public function rateCh() {
        $this->rate = 0.88;
    }
    
    
}

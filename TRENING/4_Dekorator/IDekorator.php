<?php
include_once './IKomponent.php';

abstract class IDekorator implements IKomponent{

    public function getString() {
        return $this->string;
    }
    public function setString($string) {
        
    }
}

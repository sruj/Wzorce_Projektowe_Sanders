<?php

abstract class Prototype{
    
    private $nazwisko;
    private $id;



    public function setNazwisko($param) {
        $this->nazwisko=$param;
    }
    public function getNazwisko() {
        return $this->nazwisko;
    }
    public function setId($param) {
        $this->id=$param;
    }
    public function getId() {
        return $this->id;
    }
    
    
    abstract function __clone() ;
    
    
}
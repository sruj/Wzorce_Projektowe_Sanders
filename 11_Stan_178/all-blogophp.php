<?php

interface Stan {

    public function CheckIt($value);
    public function WriteMessage();
}

class NoStan implements Stan {

    private $stan;

    public function __construct(UseStan $usestan) {
        $this->stan = $usestan;}

    public function CheckIt($value) {
        if (is_int($value))
            $this->stan->ChangeStan($this->stan->GetIntegerStan());
        elseif (is_bool($value))
            $this->stan->ChangeStan($this->stan->GetBooleanStan());
        elseif (is_string($value))
            $this->stan->ChangeStan($this->stan->GetStringStan());}

    public function WriteMessage() {
        echo 'Nie wywolano metody CheckIt()!';}
}

class IntegerStan implements Stan {

    private $stan;

    public function __construct(UseStan $usestan) {
        $this->stan = $usestan;}

    public function CheckIt($value) {
        echo 'Metoda CheckIt() byla juz wolana!';}

    public function WriteMessage() {
        $this->stan->ChangeStan($this->stan->GetNoStan());
        echo 'INTEGER';}
}

class StringStan implements Stan {

    private $stan;

    public function __construct(UseStan $usestan) {
        $this->stan = $usestan;}

    public function CheckIt($value) {
        echo 'Metoda CheckIt() byla juz wolana!';}

    public function WriteMessage() {
        $this->stan->ChangeStan($this->stan->GetNoStan());
        echo 'STRING';}
}

class BooleanStan implements Stan {

    private $stan;

    public function __construct(UseStan $usestan) {
        $this->stan = $usestan;}

    public function CheckIt($value) {
        echo 'Metoda CheckIt() byla juz wolana!'; }

    public function WriteMessage() {
        $this->stan->ChangeStan($this->stan->GetNoStan());
        echo 'BOOLEAN';}
}

class UseStan {

    private $nostan;
    private $integerstan;
    private $stringstan;
    private $booleanstan;
    private $stan;

    public function __construct() {
        $this->nostan = new Nostan($this);
        $this->integerstan = new IntegerStan($this);
        $this->stringstan = new StringStan($this);
        $this->booleanstan = new BooleanStan($this);
        $this->stan = $this->nostan;
    }

    //implementacja interfejsu obiektow - stanow
    public function CheckIt($value) {
        $this->stan->CheckIt($value);}

    public function WriteMessage() {
        $this->stan->WriteMessage();}

    // metoda delegujaca nowy obiekt stanu do pracy
    public function ChangeStan(Stan $newstan) {
        $this->stan = $newstan;}

    // gettery stanów
    public function GetNoStan() {
        return $this->nostan;}

    public function GetIntegerStan() {
        return $this->integerstan;}

    public function GetStringStan() {
        return $this->stringstan;}

    public function GetBooleanStan() {
        return $this->booleanstan;}
}

$obj = new UseStan();
$obj->CheckIt(true);
$obj->WriteMessage();
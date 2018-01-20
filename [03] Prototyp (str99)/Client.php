<?php
include_once './Prototype.php';
include_once './Informatyka.php';
include_once './Marketing.php';


class Client
{

    private $i;
    private $m;

    private $i1;
    private $i2;

    private $m1;
    private $m2;

    public function __construct()
    {
        $this->i = new Informatyka();
        $this->m = new Marketing();

        $this->i1 = clone $this->i;
        $this->setEmploye($this->i1, '1', "Robs");
        $this->i2 = clone $this->i;
        $this->setEmploye($this->i2, '2', "Lobs");

        $this->m1 = clone $this->m;
        $this->setEmploye($this->m1, '3', "Mobs");
        $this->m2 = clone $this->i;
        $this->setEmploye($this->m2, '4', "Tobs");

        $this->speaker($this->i1);
        $this->speaker($this->i2);
        $this->speaker($this->m1);
        $this->speaker($this->m2);
    }

    public function speaker(Prototype $param)
    {
        echo $param->getId() . "<br>";
        echo $param->getNazwisko() . "<br>";
        echo $param::dzial . "<br><br>";
    }

    public function setEmploye(Prototype $obj, $id, $nazw)
    {
        $obj->setId($id);
        $obj->setNazwisko($nazw);
    }

}


$run = new Client();
<?php
//Female.php
//konkretny komponent dla kobiety
class Female extends IComponent
{
public function __construct()
{
$this->date="Kobieta";
$this->setFeature("<br/>Cechy laski programistki: ");
}
public function getDate()
{
return $this->date;
}
public function getAge()
{
return $this->ageGroup;
}
public function setAge($ageNow)
{
$this->ageGroup=$ageNow;
}
public function getFeature()
{
return $this->feature;
}
public function setFeature($fea)
{
$this->feature=$fea;
}
}
?>
<?php
//Male.php
//konkretny komponent dla mężczyzny
class Male extends IComponent
{
public function __construct()
{
$this->date="Mężczyzna";
$this->setFeature("<br/>Cechy faceta programisty: ");
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
<?php

//Hardware.php
//konkretny dekorator
class Hardware extends Decorator {

    private $hardwareNow;

    public function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
        $this->getDate();
    }

    private $box = array("mac" => "Macintosh",
        "dell" => "Dell",
        "hp" => "Hewlett-Packard",
        "lin" => "Linux");

    public function setFeature($hdw) {
        $this->hardwareNow = $this->box[$hdw];
    }

    public function getFeature() {
        $output = $this->date->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;";
        $output .="$fmat Aktualnie posiadany sprzęt: ";
        $output .= $this->hardwareNow;
        return $output;
    }

}

?>
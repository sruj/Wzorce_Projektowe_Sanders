<?php
function __autoload($class_name)
{
include $class_name . '.php';
}

class Client {
    public function __construct() {
        $podpis = "Marek Judasz, bardzo dobry człowiek był";
        $d = new ConcreteClass();
        $d->templateMethod('Mali.png', $podpis);
    }
}

$go = new Client();

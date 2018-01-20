<?php

//Client.php
function __autoload($class_name) {
    include $class_name . '.php';
}

class Client {

    private $context;

    public function __construct() {
        $this->context = new Context();
        $this->context->turnOnState();
        $this->context->turnOnState();
        $this->context->turnOffState();
        $this->context->turnOffState();
    }

}

$worker = new Client();



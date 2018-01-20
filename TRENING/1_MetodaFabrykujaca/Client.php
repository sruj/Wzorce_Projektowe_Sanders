<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

class Client {
    public function __construct() {
        $cc = new ConcreteCreator();
        $cc->startFactory();
    }    
    
    
}
$worker = new Client();
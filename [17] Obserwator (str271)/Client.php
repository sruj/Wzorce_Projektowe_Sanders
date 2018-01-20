<?php

function __autoload($class_name) {
    include $class_name . '.php';
}

class Client {
    public function __construct() {

        $subject = new ConcreteSplSubject();
        
        $obs1= new ConcreteSplObserver();
        $obs2= new ConcreteSplObserver();
        $obs3= new ConcreteSplObserver();
        
        $subject->setObserver();
        
        $subject->attach($obs1);
        $subject->attach($obs2);
        $subject->attach($obs3);
        
        $subject->setData("Maryja zawsze dziewica!<br>");
        
        $subject->notify();
        
        $subject->detach($obs2);
        $subject->setData("Jezus Król Polski!<br>");
        $subject->notify();
        
        
    }
}

$worker = new Client();
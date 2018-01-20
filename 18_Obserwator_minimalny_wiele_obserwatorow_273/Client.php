<?php

function __autoload($class_name) {
    include $class_name . '.php';
}

class Client {
    public function __construct() {

        $subject = new ConcreteSplSubject();
        
        $tablet= new TabletSplObserver();
        $phone= new PhoneSplObserver();
        $desktop= new DesktopSplObserver();
        
        $subject->setObserver();
        
        $subject->attach($desktop);
        $subject->attach($phone);
        $subject->attach($tablet);
        
        $subject->setData("steph.jpg");
        
        $subject->notify();
        
    }
}

$worker = new Client();
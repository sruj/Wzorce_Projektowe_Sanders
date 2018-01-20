<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

class Client {
    private $date;
    
    public function __construct() {
    
        $this->date = getdate();
        
        $q1 = new Q1();
        $q2 = new Q2();
        $q3 = new Q3();
        $q4 = new Q4();

        $q1->setSuccessor($q2);
        $q2->setSuccessor($q3);
        $q3->setSuccessor($q4);
        
        $q1->handleRequest($this->date);
    }
}
$worker = new Client();











    
    
    
    
    
    
    
    
    


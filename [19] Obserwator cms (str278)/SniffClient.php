<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

class SniffClient {
    
    private $dp;
    
    public function __construct() {
        $this->dp = $_POST['dp'];
        
        $subject = new ConcreteSplSubject();
        $subject->setObserver();
        
        if(1){
//        if($this->isMobileDevice()){
            $subject->attach(new PhoneSplObserver());
        }else{
            $subject->attach(new DesktopSplObserver());
        }
            
        $subject->setData($this->dp);
        $subject->notify();
    }
    
    private function isMobileDevice(){
    $aMobileUA = array(
        '/iphone/i' => 'iPhone', 
        '/ipod/i' => 'iPod', 
        '/ipad/i' => 'iPad', 
        '/android/i' => 'Android', 
        '/blackberry/i' => 'BlackBerry', 
        '/webos/i' => 'Mobile'
    );

    //Return true if Mobile User Agent is detected
    foreach($aMobileUA as $sMobileKey => $sMobileOS){
        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
            return true;
        }
    }
    //Otherwise return false..  
    return false;
}
    
}

$worker = new SniffClient();
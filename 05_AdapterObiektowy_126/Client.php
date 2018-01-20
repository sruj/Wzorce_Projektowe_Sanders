<?php
include_once './Mobile.php';
include_once './MobileAdapter.php';

class Client{
    
    public function __construct() {
        $m = new Mobile();
        $ma = new MobileAdapter($m);
        
        $ma->a();
        $ma->b();
    }
}

$run = new Client();
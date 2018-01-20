<?php

include_once './index.php';
class Client {
    private $square;
    
    public function __construct() {
        $this->square=$_GET['square'];
        
        echo $this->square;
        session_start();
        
        $_SESSION['square'.$this->square] = "active";
        echo $_SESSION['square1'];
        header("./index.php");
    }
}

(new Client());

<?php
include_once './IFormat.php';

class Desktop implements IFormat{
    
    public function a() {
        echo "function a()<br>";
    }
    public function b() {
        echo "function b()<br>";
    }
}
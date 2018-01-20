<?php
include_once './Mobile.php';
include_once './IFormat.php';

class MobileAdapter implements IFormat{
    
    public $mobile;
    public function __construct(IMobileFormat $param) {
        $this->mobile = new $param();
    }
    
    
    public function a() {
        $this->mobile->a();
    }
    public function b() {
        $this->mobile->c();
    }
    
}
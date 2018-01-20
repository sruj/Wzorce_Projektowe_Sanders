<?php

class Request {
    private $request;
    
    public function __construct($param) {
        $this->request = $param;
    }
    public function getRequest(){
        return $this->request;
    }
}

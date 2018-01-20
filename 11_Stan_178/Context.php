<?php

//Context.php

class Context {
    private $onState;
    private $offState;
    private $currentState;
    
    function __construct() {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        
        $this->currentState = $this->offState;
    }

    public function turnOnState() {
        $this->currentState->turnStateOn();
    }
    public function turnOffState() {
        $this->currentState->turnStateOff($this);
    }
    
    public function setState(IState $state) {
        $this->currentState = $state;
    } 
    public function getOnState() {
        return $this->onState;
    } 
    public function getOffState() {
        return $this->offState;
    } 

}


<?php

//OnState.php
class OnState implements IState {

    public $context;


    public function __construct(Context $context) {
        $this->context = $context;
    }
    function turnStateOff(){
        echo "<br>wyłączyć światła";
        $this->context->setState($this->context->getOffState());
    }
    function turnStateOn(){
        echo "<br>światło jest już włączone";
    }
    
    
}

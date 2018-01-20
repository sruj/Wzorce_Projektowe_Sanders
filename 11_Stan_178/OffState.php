<?php

//OffState.php
class OffState implements IState {

    public $context;

    public function __construct(Context $context) {
        $this->context = $context;
    }
    function turnStateOff(){
        echo "<br>światło jest już wyłączone";
    }
    function turnStateOn(){
        echo "<br>włączyć światła";
        $this->context->setState($this->context->getOnState());
    }

}

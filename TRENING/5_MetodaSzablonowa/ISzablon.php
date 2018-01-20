<?php

abstract class ISzablon {
    private $sets;
    
    public function templateMethod($param) {
        $this->sets=$param;
        $this->germany();
        $this->france();
        $this->poland();
        $this->russia();
        $this->hookJapanAdvance();
    }
    private function hookJapanAdvance() {
        if (!$this->sets){
            echo "Poland advance in Japan";
        }
        
    }
    abstract function germany();
    abstract function poland();
    abstract function russia();
    abstract function france();
    
}

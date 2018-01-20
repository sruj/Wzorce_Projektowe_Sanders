<?php

abstract class CreatorFactory {
    
    public function startFactory(){
        $this->go();
    }
    
    abstract function go();
    
}

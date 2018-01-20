<?php

class ConcreteSplSubject implements SplSubject {
    
    private $observers;
    private $data;

    public function setObserver() {
        $this->observers = new SplObjectStorage();
    }
    
    public function attach(\SplObserver $observer) {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer) {
        $this->observers->detach($observer);
    }
    
    public function notify() {
        foreach ($this->observers as $observ){
            $observ->update($this);
        }
    }
    
    public function setData($param) {
        $this->data = $param;
    }
    
    public function getData() {
        return $this->data;
    }
    
    
}

<?php

include_once './Handler.php';

class Q1 implements Handler {

    private $next;
    private $date;
    private $dateSec;

    public function setSuccessor($param) {
        $this->next = $param;
    }

    public function handleRequest($param) {
        $this->date = $param;
        $this->dateSec = intval($this->date['seconds']);
        
        if ($this->dateSec > 0 && $this->dateSec < 16 ) {
            $factory = new HungerFactory();
            echo $factory->feedFactory(new C1());
        }
        else {
            $this->next->handleRequest($param);
        }
    }

}

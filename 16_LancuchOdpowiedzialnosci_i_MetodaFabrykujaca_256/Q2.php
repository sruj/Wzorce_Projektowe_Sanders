<?php

include_once './Handler.php';

class Q2 implements Handler {

    private $next;
    private $date;
    private $dateSec;

    public function setSuccessor($param) {
        $this->next = $param;
    }

    public function handleRequest($param) {
        $this->date = $param;
        $this->dateSec = intval($this->date['seconds']);
        
        if ($this->dateSec > 15 && $this->dateSec < 31 ) {
            $factory = new HungerFactory();
            echo $factory->feedFactory(new C2());
        }
        else {
            $this->next->handleRequest($param);
        }
    }

}

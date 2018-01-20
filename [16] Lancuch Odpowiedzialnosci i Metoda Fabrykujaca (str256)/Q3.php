<?php

include_once './Handler.php';

class Q3 implements Handler {

    private $next;
    private $date;
    private $dateSec;

    public function setSuccessor($param) {
        $this->next = $param;
    }

    public function handleRequest($param) {
        $this->date = $param;
        $this->dateSec = intval($this->date['seconds']);
        
        if ($this->dateSec > 30 && $this->dateSec < 46 ) {
            $factory = new HungerFactory();
            echo $factory->feedFactory(new C3());
        }
        else {
            $this->next->handleRequest($param);
        }
    }

}

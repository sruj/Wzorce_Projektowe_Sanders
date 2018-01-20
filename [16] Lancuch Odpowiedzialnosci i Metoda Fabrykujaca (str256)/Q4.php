<?php

include_once './Handler.php';

class Q4 implements Handler {

    private $next;
    private $date;
    private $dateSec;

    public function setSuccessor($param) {
        $this->next = $param;
    }

    public function handleRequest($param) {
        $this->date = $param;
        $this->dateSec = intval($this->date['seconds']);
        
        if ($this->dateSec > 45 && $this->dateSec < 61 ) {
            $factory = new HungerFactory();
            echo $factory->feedFactory(new C4());
        }
        else {
            echo "coś poszło nie tak";
        }
    }

}

<?php

class Sms {

    private $to;
    private $message;
    private $from;


    public function setTo($param) {
        $this->to = $param;
    }
    
    public function setMessage($param) {
        $this->message = $param;
    }

    public function setFrom($param) {
        $this->from = $param;
    }
    
    public function sendMessage() {
        mail($this->to,'', $this->message, $this->from);
        echo 'poszło (poszło by gdyby Ameryka';        
//    '+48xxxxxxxxx@text.plusgsm.pl',
//    '',
//    'Oto moja wiadomosc!',
//    "From: Kamil <xxx@kamilbrenk.pl>\r\n"
    }
    
}

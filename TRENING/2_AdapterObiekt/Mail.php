<?php

class Mail {

    private $to;
    private $subject;
    private $message;


    public function setTo($param) {
        $this->to = $param;
    }
    
    public function setSubject($param) {
        $this->subject = $param;
    }
    
    public function setMessage($param) {
        $this->message = $param;
    }
    
    public function sendMail() {
            mail($this->to, $this->subject, $this->message);
            echo 'poszło (poszłoby gdybym zainstalował server mailowy i pozmieniał '
            . 'cośtam w php.ini. Nie chcę mieszać bo może konfogurację mam pod mailera Symfony.<br>';
    }
}

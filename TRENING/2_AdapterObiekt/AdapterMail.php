<?php
include_once './Mail.php';
include_once './IAdapter.php';

class AdapterMail implements IAdapter{
    
    private $to;
    private $message;
    private $subject;


    public function setData(array $param) {
        $this->to = $param['to'];
        $this->message = $param['message'];
        $this->subject = $param['subject'];
    }
    
    public function sendMessage() {
        $object = new Mail();
        $object->setSubject($this->subject);
        $object->setMessage($this->message);
        $object->setTo($this->to);
        $object->sendMail();
    }
}

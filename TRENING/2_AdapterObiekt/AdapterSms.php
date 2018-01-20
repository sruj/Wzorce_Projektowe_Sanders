<?php
include_once './Sms.php';
include_once './IAdapter.php';

class AdapterSms implements IAdapter{
    
    private $to;
    private $message;
    private $from;


    public function setData(array $param) {
        $this->to = $param['to'];
        $this->message = $param['message'];
        $this->from = $param['from'];
    }
    
    public function sendMessage() {
        $object = new Sms();
        $object->setFrom($this->from);
        $object->setMessage($this->message);
        $object->setTo($this->to);
        $object->sendMessage();
        
    }
}

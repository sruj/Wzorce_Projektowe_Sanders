<?php
include_once './Tweet.php';
include_once './IAdapter.php';

class AdapterTweet implements IAdapter{
    
    private $data;


    public function setData(array $param) {
        $this->data = $param['message'];
    }
    
    public function sendMessage() {
        $object = new Tweet();
        $object->setMessage($this->data);
        $object->sendTweet();
    }
}

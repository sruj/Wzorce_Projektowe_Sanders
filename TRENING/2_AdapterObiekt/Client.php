<?php
//-twitter działa, mail nie bo brakuje zainstalowanego serwera smtp, sms nie 
//działa bo też serwer smtp.
//-dwa dni później z nowym wampem jakiś exception związany z vendorem tweetera
function __autoload($class_name){
    include $class_name . '.php';
}
require __DIR__ . '/vendor/autoload.php';
include_once './AdapterTweet.php';

class Client {
    
    public function __construct() {
//        $data = array();
        
        //tweet, sms, mail
        $data['message'] = "test wzorca adapter";
        //sms, mail
        $data['to'] = 'chryplewiczpawel@wp.pl';
        //sms
        $data['from'] = 'Jurek';
        //mail
        $data['subject'] = 'Adapter';
        
        $this->go($data, 'twitter');
    }    
    
    public function go(array $data, $messager) {
        
        switch ($messager) {
        case 'mail':
            $ada = new AdapterMail();
            break;
        case 'sms':
            $ada = new AdapterSms();
            break;
        case 'twitter':
            $ada = new AdapterTweet();
            break;
        default:
            break;
        }
            $ada->setData($data);
            $ada->sendMessage();
    }
}

$worker = new Client();

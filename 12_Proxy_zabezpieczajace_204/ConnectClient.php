<?php

include_once('UniversalConnect.php');

class ConnectClient {

    private $hookup;

    public function __construct() {
//Jedna linia dla całej operacji połączenia z bazą
        $this->hookup = UniversalConnect::doConnect();
    }

}

$worker = new ConnectClient();

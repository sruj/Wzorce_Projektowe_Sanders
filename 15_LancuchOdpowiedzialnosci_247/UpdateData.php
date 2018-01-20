<?php

ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);
include_once('UniversalConnect.php');

class UpdateData {

    private $tableMaster;
    private $hookup;

    public function __construct() {
//Nazwa tabeli i połączenie
        $this->tableMaster = "helpdesk";
        $this->hookup = UniversalConnect::doConnect();
//Z formularza HTML
        $chain = $this->hookup->real_escape_string($_POST['chain']);
        $response = $this->hookup->real_escape_string($_POST['response']);
//Utworzenie zapytania SQL
        $sql = "UPDATE $this->tableMaster SET response='$response' WHERE chain='$chain'";
        if ($this->hookup->query($sql)) {
            printf("Zapytanie łańcucha: %s <br/>Odpowiedź %s <br/> została wstawiona do
tabeli %s.", $chain, $response, $this->tableMaster);
        }
//%s to łańcuch parametru
        elseif (($result = $this->hookup->query($sql)) === false) {
            printf("Błąd w zapytaniu: %s <br/> Całe zapytanie: %s <br/>", $this->hookup->error, $sql);
            exit();
        }
        $this->hookup->close();
    }

}

$worker = new UpdateData();

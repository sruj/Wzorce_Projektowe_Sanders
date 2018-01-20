<?php

ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);
include_once('UniversalConnect.php');

class InsertData {

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
        $sql = "INSERT INTO $this->tableMaster (chain,response) VALUES ('$chain','$response')";
        if ($this->hookup->query($sql)) {
            printf("Zapytanie łańcucha: %s <br/>Odpowiedź %s <br/> została wstawiona do
tabeli %s.", $chain, $response, $this->tableMaster);
        }
//%s to łańcuch z parametru
        elseif (($result = $this->hookup->query($sql)) === false) {
            printf("Błąd w zapytaniu: %s <br/> Całe zapytanie: %s <br/>", $this->hookup->error, $sql);
            exit();
        }
        $this->hookup->close();
    }

}

$worker = new InsertData();
?>
<?php

include_once('UniversalConnect.php');

class CreateTable {

    private $tableMaster = "proxyLog";
    private $hookup;

    public function __construct() {
        $operation = new UniversalConnect();
        $this->hookup = $operation->doConnect();
        $drop = "DROP TABLE IF EXISTS $this->tableMaster";
        if ($this->hookup->query($drop) === true) {
            printf("Stara tabela $this->tableMaster została usunięta.<br/> \n");
        }
        $sql = "CREATE TABLE $this->tableMaster (uname NVARCHAR(15),
pw NVARCHAR(120))";
        if ($this->hookup->query($sql) === true) {
            printf("Tabela $this->tableMaster została utworzona.<br/> \n");
        }
        $this->hookup->close();
    }

}

$worker = new CreateTable();

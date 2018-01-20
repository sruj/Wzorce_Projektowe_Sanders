<?php

include_once('./UniversalConnect.php');

class CreateTable {

    private $tableMaster;
    private $hookup;

    public function __construct() {
        $this->tableMaster = "helpdesk";
        $this->hookup = UniversalConnect::doConnect();
        $drop = "DROP TABLE IF EXISTS $this->tableMaster";
        if ($this->hookup->query($drop) === true) {
            printf("Stara tabela %s została usunięta.<br/>", $this->tableMaster);
        }
        $sql = "CREATE TABLE $this->tableMaster (id INT NOT NULL AUTO_INCREMENT,chain
VARCHAR(3), response TEXT, PRIMARY KEY (id))";
        if ($this->hookup->query($sql) === true) {
            printf("Tabela $this->tableMaster została utworzona.<br/>");
        }else
        {
            printf($this->hookup->error);
        }
        $this->hookup->close();
    }

}

$worker = new CreateTable();

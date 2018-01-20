<?php

include_once('UniversalConnect.php');

class CreateTable {

    private $tableMaster;
    private $hookup;

    public function __construct() {
        $this->tableMaster = "cms";
        $this->hookup = UniversalConnect::doConnect();
        $drop = "DROP TABLE IF EXISTS $this->tableMaster";
        if ($this->hookup->query($drop) === true) {
            printf("Stara tabela %s została usunięta.<br/>", $this->tableMaster);
        }
        $sql = "CREATE TABLE $this->tableMaster (
id SERIAL,
dpHeader NVARCHAR(50),
textBlock TEXT,
imageURL NVARCHAR(60),
PRIMARY KEY (id))";
        if ($this->hookup->query($sql) === true) {
            printf("Tabela $this->tableMaster została pomyślnie utworzona.<br/>");
        }
        $this->hookup->close();
    }

}

$worker = new CreateTable();
?>
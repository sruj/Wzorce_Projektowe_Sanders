<?php

include_once './UniversalConnect.php';
include_once './abstractDbTable.php';
include_once './TableHtml.php';

class displayAllAdm extends abstractDbTable {

    private $display;
    private $hookup;

    public function __construct() {
        $this->hookup = UniversalConnect::doConnect();
        $this->display = $_POST["display"];

        $this->display();
    }

    public function display() {
        if ($this->display = "Wyświetl dane") {
            $this->displayAll();
        }
    }

    public function displayAll() {
        $sql = "SELECT * FROM " . $this->table;
        $result = $this->hookup->query($sql);
        $tableHtml = new TableHtml();
        $tableHtml->display($result);       
    }
}

$worker = new displayAllAdm();

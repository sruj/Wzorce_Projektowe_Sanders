<?php

include_once './UniversalConnect.php';
include_once './abstractDbTable.php';
include_once './TableHtml.php';

class findAllAdm extends abstractDbTable{

    private $hookup;
    private $field;
    private $term;
    
    public function __construct() {
        $this->hookup = UniversalConnect::doConnect();
        $this->field = $_POST["field"];
        $this->term = $_POST["term"];
        
        $this->find();

    }
    public function find() {
        $sql = "SELECT * FROM " . $this->table . " WHERE ".$this->field."='".$this->term."'";
        var_dump($sql);
        $result = $this->hookup->query($sql);
        $tableHtml = new TableHtml();
        $tableHtml->display($result);
    }
}
$worker = new findAllAdm();
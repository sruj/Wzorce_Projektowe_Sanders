<?php

include_once './UniversalConnect.php';
include_once './abstractDbTable.php';
include_once './TableHtml.php';

class killAllAdm extends abstractDbTable {

    private $hookup;
    private $delete;

    public function __construct() {
        $this->hookup = UniversalConnect::doConnect();
        $this->delete = $_POST["delete"];

        $this->delete();
    }

    public function delete() {
        $sql = "DELETE FROM ".$this->table."
WHERE id=".$this->delete;
        $result = $this->hookup->query($sql);        
        if ($this->hookup->affected_rows < 1) {
            echo "nie udało się usunąć";
        } else {
            echo "usunięto " . $this->hookup->affected_rows . " wiersz."
            . "<br> Wiersz z id: " . $this->delete;
        }        
    }
}
$worker = new killAllAdm();
    

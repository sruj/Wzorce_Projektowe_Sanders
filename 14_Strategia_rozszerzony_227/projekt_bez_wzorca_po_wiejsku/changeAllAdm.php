<?php

include_once './UniversalConnect.php';
include_once './abstractDbTable.php';
include_once './TableHtml.php';

class changeAllAdm extends abstractDbTable {

    private $hookup;
    private $update;
    private $old;
    private $new;

    public function __construct() {
        $this->hookup = UniversalConnect::doConnect();
        $this->update = $_POST["update"];
        $this->old = $_POST["old"];
        $this->new = $_POST["new"];

        $this->search();
    }

    public function search() {
        $sql = "UPDATE " . $this->table . " SET " . $this->update . "='" . $this->new .
                "' WHERE " . $this->update . "='" . $this->old . "'";
        $result = $this->hookup->query($sql);
        if ($this->hookup->affected_rows < 1) {
            echo "nie udało się zmienić";
        } else {
            echo "zmieniono " . $this->hookup->affected_rows . " wiersz."
            . "<br> Pole: " . $this->update . "<br>z: " . $this->old . "<br>na: " . $this->new;
        }
    }

}

$worker = new changeAllAdm();

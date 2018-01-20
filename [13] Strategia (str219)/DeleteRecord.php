<?php

//DeleteRecord.php
class DeleteRecord implements IStrategy {

    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "Wiersz " . $test . " został usunięty.<br/>";
    }

}

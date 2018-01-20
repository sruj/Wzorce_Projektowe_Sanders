<?php

class DataEntry implements IStrategy
//DataEntry.php 
{

    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "Następujące dane zostały zapisane: " . $test . "<br/>";
    }

}

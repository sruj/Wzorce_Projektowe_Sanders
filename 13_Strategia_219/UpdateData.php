<?php

//UpdateData.php
class UpdateData implements IStrategy {

    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "Zaktualizowane dane są następujące: " . $test . "<br/>";
    }

}

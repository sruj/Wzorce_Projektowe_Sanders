<?php

//DisplayData.php
class DisplayData implements IStrategy {

    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $test = "Oto wszystkie dane!!";
        echo $test . "<br/>";
    }

}

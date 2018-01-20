<?php

ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);
include_once('UniversalConnect.php');

class DataUpdate {

    private $tableMaster;
    private $hookup;
    private $dpUpdate;
    private $newData;

    public function __construct() {
        $this->tableMaster = "cms";
        $this->hookup = UniversalConnect::doConnect();
        
        
        if ($_POST['dpUpdate']){
            $this->dpUpdate = $this->hookup->real_escape_string($_POST['dpUpdate']);
        }
        if ($_POST['newData']){
            $this->newData = $this->hookup->real_escape_string($_POST['newData']);
        }
        
        $sql = "UPDATE $this->tableMaster
            SET textBlock = '$this->newData' WHERE dpHeader = '$this->dpUpdate'";
        
        
        if($this->hookup->query($sql)=== TRUE  && $this->hookup->affected_rows > 0){
            echo "zauktualizowano z wielkim sukcesem dane!";
        }else
        {
            echo "nie dodano z sukcesem danych!" .$this->hookup->error ;
        }
        
        $this->hookup->close();
                
    }

}

$worker = new DataUpdate();
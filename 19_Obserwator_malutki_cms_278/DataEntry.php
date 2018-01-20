<?php

ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);
include_once('UniversalConnect.php');

class DataEntry {

    private $tableMaster;
    private $hookup;
    private $dpHeader;
    private $textBlock;
    private $imageURL;

    public function __construct() {
        $this->tableMaster = "cms";
        $this->hookup = UniversalConnect::doConnect();
        
        
        if ($_POST['textBlock']){
            $this->textBlock = $this->hookup->real_escape_string($_POST['textBlock']);
        }
        if ($_POST['imageURL']){
            $this->imageURL = $this->hookup->real_escape_string($_POST['imageURL']);
        }
        if ($_POST['dpHeader']){
            $this->dpHeader = $this->hookup->real_escape_string($_POST['dpHeader']);
        }
                
        $sql ="INSERT INTO $this->tableMaster (dpHeader, textBlock, imageURL)
                VALUES (' $this->dpHeader ',  ' $this->textBlock ', ' $this->imageURL ')";
        
        if($this->hookup->query($sql)=== TRUE  && $this->hookup->affected_rows > 0){
            echo "dodano z wielkim sukcesem dane!";
        }else
        {
            echo "nie dodano z sukcesem danych!<br><br>" .$this->hookup->error;
        }
        
        $this->hookup->close();
                
    }

}

$worker = new DataEntry();
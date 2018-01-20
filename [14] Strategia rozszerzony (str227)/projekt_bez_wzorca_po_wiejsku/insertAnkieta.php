<?php
include_once './UniversalConnect.php'; 
include_once './abstractDbTable.php'; 

class insertAnkieta extends abstractDbTable{
    
    private $company;
    private $devdes;
    private $lang;
    private $plat;
    private $style;
    private $device;
    private $hookup;
    
    function __construct() {
        $this->hookup=UniversalConnect::doConnect();
        
        $this->company = $this->hookup->real_escape_string($_POST["company"]);    
        $this->devdes = $this->hookup->real_escape_string($_POST["devdes"]);    
        $this->lang = $this->hookup->real_escape_string($_POST["lang"]);    
        $this->plat = $this->hookup->real_escape_string($_POST["plat"]);
        $this->style = $this->hookup->real_escape_string($_POST["style"]);    
        $this->device = $this->hookup->real_escape_string($_POST["device"]);    
        
        $this->insertIntoTable();
    }

    function insertIntoTable() {
        
        
        $sql= "INSERT INTO ".$this->table." (company ,devdes, lang, plat, style, device) "
                . "VALUES ('".$this->company."','".$this->devdes."','".$this->lang."','"
                .$this->plat."','".$this->style."','".$this->device."')";
        var_dump($sql);
        if ($this->hookup->query($sql)=== TRUE){
            echo "Dodano rekord z powodzeniem. Hejże ha!";
        }  else {
            echo "Nie dodano rekordu. Error: " . $sql . "<br>" . $this->hookup->error;
        }
    }
}
$worker = new insertAnkieta();

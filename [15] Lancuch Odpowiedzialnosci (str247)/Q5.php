<?php
include_once('./UniversalConnect.php');
include_once './Handler.php';

class Q5 implements Handler{
    private $next;
    private $q;
    private $myQ = "q5";
    private $hookup;
    
    public function setSuccessor($param){
        $this->next=$param;
    }
    
    public function handleRequest($param) {
        $this->q = $param;
        if ($this->myQ == $this->q) {
            $this->hookup = UniversalConnect::doConnect();
            $sql = "SELECT response FROM " . self::tableMaster . " WHERE "
                    . "chain ='$this->q'";
            if($result = $this->hookup->query($sql)or die($this->hookup->error($sql))){
                $row = $result->fetch_assoc();
                echo $row["response"];
            }
            $this->hookup->close();
        }
        else {
            $this->next->handleRequest(null);
        }
    }  
}

<?php

include_once("ISubject.php");
include_once('RealSubject.php');
include_once('UniversalConnect.php');

class Proxy implements ISubject {

    private $tableMaster;
    private $hookup;
    private $logGood;
    private $realSubject;

    public function login($uNow, $pNow) {
//Dane zostały przefiltrowane w klasie Client; szyfrowanie hasła
        $uname = $uNow;
        $pw = md5($pNow);
        $this->logGood = false;
//Wybranie tabeli i wykonanie połączenia
        $this->tableMaster = "proxyLog";
        $this->hookup = UniversalConnect::doConnect();
//Stworzenie zapytania SQL
        $sql = "SELECT uname, pw FROM $this->tableMaster WHERE uname='$uname'";
        if ($result = $this->hookup->query($sql)) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if ($row['pw'] == $pw) {
                $this->logGood = true;
            }
            $result->close();
        } elseif (($result = $this->hookup->query($sql)) === false) {
            printf("Błąd: %s <br/>", $this->hookup->error);
            exit();
        }
        $this->hookup->close();
        if ($this->logGood) {
            $this->request();
        } else {
            echo "Podana nazwa użytkowanika i/lub hasło są niepoprawne.";
        }
    }

    public function request() {
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }

}

<?php

include_once('IConnectInfo.php');

class UniversalConnect implements IConnectInfo {

    private static $server = IConnectInfo::HOST;
    private static $currentDB = IConnectInfo::DBNAME;
    private static $user = IConnectInfo::UNAME;
    private static $pass = IConnectInfo::PW;
    private static $hookup;

    public static function doConnect() {
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);
        if (self::$hookup) {
            echo "Udane połączenie z bazą MySQL:<br/>";
        } elseif (mysqli_connect_error(self::$hookup)) {
            echo('Oto twój błąd: ' . mysqli_connect_error());
        }
        return self::$hookup;
    }

}

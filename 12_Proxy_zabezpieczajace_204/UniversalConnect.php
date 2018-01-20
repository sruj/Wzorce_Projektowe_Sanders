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
//Na potrzeby debugowania należy usunąć ukośniki w poniższej linii
//echo "Udane połączenie z MySQL:";
        } elseif (mysqli_connect_error(self::$hookup)) {
            echo('Here is why it failed: ' . mysqli_connect_error());
        }
        return self::$hookup;
    }
}

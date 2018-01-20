<?php

//Nazwa pliku: IConnectInfo.php
interface IConnectInfo {

    const HOST = "localhost";
    const UNAME = "root";
    const PW = "";
    const DBNAME = "wzorceprojektowesanders";

    public static function doConnect();
}

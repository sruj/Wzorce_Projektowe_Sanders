<?php
//Jedną z głównych różnic pomiędzy wzorcem z parametrami a wzorcem, który przedstawili-
//śmy pierwotnie, jest to, że klient przechowuje referencje do fabryki i produktu. W parame-
//tryzowanym żądaniu musi nazwać produkt, a nie tylko fabrykę produktów. 
include_once('CountryFactory.php');
include_once('KyrgyzstanProduct.php');
include_once('MoldovaProduct.php');

class Client {

    private $countryFactory;

    public function __construct() {
        $this->countryFactory = new CountryFactory();
        echo $this->countryFactory->doFactory(new MoldovaProduct());
        echo $this->countryFactory->doFactory(new KyrgyzstanProduct());
    }

}

$worker = new Client();

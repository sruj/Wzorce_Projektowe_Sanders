<?php
function __autoload($class_name){
    include $class_name . '.php';
}

class Client{
    private $basicSite;
    // - do basicSite laduje obiekt BasicSite 
    // (gdzie wlasciwosc site to literal)
    // - wchodze do metody wrapComponet z obiektem basicSite
    // - tworze obiekt Maintance wrzucajac do konstruktora obiekt BasicSite
    // (co ustawia wlasciwosc site na obiekt BasicSite)
    // - tworze obiekt Video wrzucajac do konstruktora obiekt Maintance
    // (co ustawia wlasciwosc site na obiekt Maintance)
    // - tworze obiekt DataBase wrzucajac do konstruktora obiekt Video
    // (co ustawia wlasciwosc site na obiekt Video)
    // - zwracam do wlasciwosci basicSite obiekt DataBase
    // 
    // - wywoluje na obiekcie DataBase metode getSite 
    // - 
    // - 
    public function __construct() {
        $this->basicSite = new BasicSite();
        echo "<pre>" . print_r($this->basicSite, true) . "</pre>";
        $this->basicSite = $this->wrapComponent($this->basicSite);
        
        $siteShow = $this->basicSite->getSite();
        $format="<br/>&nbsp;&nbsp;<strong>Suma= $";
        $price = $this->basicSite->getPrice();
        
        echo $siteShow . $format . $price . "</strong><p/>";
    }
    protected function wrapComponent(IComponent $param) {
        $param = new Maintenance($param);
        echo "<pre>" . print_r($param, true) . "</pre>";
        $param = new Video($param);
        echo "<pre>" . print_r($param, true) . "</pre>";
        $param = new DataBase($param);
        echo "<pre>" . print_r($param, true) . "</pre>";
        
        return $param;
    }
}

$worker = new Client();
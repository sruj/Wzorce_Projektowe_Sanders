<?php
//Tekst jest
//wpisany w ciele klasy (w rzeczywistości powinien być pobierany z pliku tekstowego lub bazy
//danych), a grafika wywoływana jest przy wykorzystaniu znacznika  <img src...> . 
        
include_once('FormatHelper.php');
include_once('Product.php');

class KyrgyzstanProduct implements Product {

    private $mfgProduct;
    private $formatHelper;

    public function getProperties() {
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct.="<img src='Mali.png' class='pixRight' width='600' height='304'>";
        $this->mfgProduct.="<header>Kirgistan</header>";
        $this->mfgProduct.="<p>Malowniczy kraj w centralnej Azji hołdujący tradycji nomadów. Znaczna jegoczęść została w 1876 roku zaanektowana przez Rosję. W 1916 roku Kirgiz wzniecili przeciwko imperium rosyjskiemu powstanie, w którym zginęła prawiejedna szósta populacji Kirgistanu. Kirgistan stał się republiką sowiecką w roku</p>";
        $this->mfgProduct .=$this->formatHelper->closeUp();
        return $this->mfgProduct;
    }

}

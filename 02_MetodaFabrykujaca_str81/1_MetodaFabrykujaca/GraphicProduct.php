<?php

include_once('Product.php');

class GraphicProduct implements Product {

    private $mfgProduct;

    public function getProperties() {
        $this->mfgProduct = "<!doctype html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct.="<title>Fabryka map</title>";
        $this->mfgProduct.="</head><body>";
        $this->mfgProduct.="<img src='Mali.png' width='150' height='150' />";
        $this->mfgProduct.="</body></html>";
        return $this->mfgProduct;
    }

}

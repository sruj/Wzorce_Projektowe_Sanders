<?php

//GraphicProduct.php
class GraphicProduct implements Product {

    private $mfgProduct;

    public function getProperties() {
        $this->mfgProduct = "<img src='Mali.png'>";
        return $this->mfgProduct;
    }

}

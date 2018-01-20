<?php
include_once './IProduct.php';
/**
 * Description of ProductGermany
 *
 * @author chiny
 */
class ProductGermany   implements IProduct{
    
    public function getProperties() {
        echo "Germany<br>";
    }
}

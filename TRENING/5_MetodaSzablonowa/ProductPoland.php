<?php
include_once './IProduct.php';
/**
 * Description of ProductPoland
 *
 * @author chiny
 */
class ProductPoland implements IProduct{
    
    public function getProperties() {
        echo "Poland<br>";
    }
}

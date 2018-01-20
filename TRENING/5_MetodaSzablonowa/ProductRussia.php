<?php
include_once './IProduct.php';
/**
 * Description of ProductRussia
 *
 * @author chiny
 */
class ProductRussia  implements IProduct{
    
    public function getProperties() {
        echo "Russia<br>";
    }
}

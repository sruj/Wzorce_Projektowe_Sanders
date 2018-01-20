<?php
include_once './IProduct.php';
/**
 * Description of ProductFrance
 *
 * @author chiny
 */
class ProductFrance  implements IProduct{
    
    public function getProperties() {
        echo "France<br>";
    }
}

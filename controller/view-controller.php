<?php
    include_once '../autoload/class-autoloader.inc.php';
    $type = $_GET['type'];
    $name = $_GET['name'];
    $sku = $_GET['sku'];
    $price = $_GET['price'];
    $attribute = $_GET['attribute'];
    $product = new $type($type, $sku, $name, $price, $attribute);
    $product->print();    
?>
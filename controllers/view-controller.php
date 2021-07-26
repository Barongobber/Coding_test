<?php
    include_once '../autoload/class-autoloader.inc.php';

    $method = $_SERVER['REQUEST_METHOD'];

    if($method == "GET")
    {
        $type = $_GET['type'];
        $name = $_GET['name'];
        $sku = $_GET['sku'];
        $price = $_GET['price'];
        $attribute = $_GET['attribute'];
        $product = new $type($type, $sku, $name, $price, $attribute);
        $product->print();  
    }
    else if ($method == "POST")
    {
        $type = $_POST['type'];
        if ($type != "")
        {
            $type::showForm();
        }
        else
        {
            echo "<p class'text-mute'><b>Please select one of type first</b></p>";
        }
    }

?>
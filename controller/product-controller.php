<?php
    include_once '../autoload/class-autoloader.inc.php';
    
    $method = $_SERVER['REQUEST_METHOD'];
    
    if ($method == "GET")
    {
        $productList = Product::getAllProduct();
        $test = json_encode($productList); 
        echo var_dump($test);    
        // echo json_encode($productList);
    }
    else if ($method == "POST") 
    {
        
        $type = $_POST['type'];
        if($type != null)
        {
            $name = $_POST['name'];
            $sku = $_POST['sku'];
            $price = $_POST['price'];
    
            $content = $_POST['content'];
            $attribute = "";
            foreach ($content as $value)
            {
                $attribute .= $value;
            }
            $product = new $type($type, $sku, $name, $price, $attribute);
            $product->insert();
            echo "Success";
        }
        
        else
        {
            $sku = $_POST['sku'];
            $deleteStatus = Product::deleteProduct($sku);
        }

    }
?>
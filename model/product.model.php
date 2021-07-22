<?php
    abstract class Product 
    {
        protected $sku;
        protected $name;
        protected $price;
        protected $type;

        public function __construct($_sku = "", $_name = "", $_price = 0, $type = "")
        {
            $this->sku = $_sku;   
            $this->name = $_name;   
            $this->price = $_price;
            $this->type = $type;
        }
        
        public function getSku() 
        {
            return $this->sku;
        }

        public function getName() 
        {
            return $this->name;
        }

        public function getPrice() 
        {
            return $this->price;
        }

        public function getType() 
        {
            return $this->type;
        }
        
        public static function getAllProduct() 
        {
            $productList = array();
            $sql = "SELECT * FROM product";
            $result = mysqli_query(DB::connect(), $sql);
            while($row = mysqli_fetch_assoc($result))
            {
                $productList[] = $row;
            }
            mysqli_close(DB::connect());
            return $productList;
        }
        
        public static function deleteProduct($sku) 
        {
            $sql = "DELETE FROM product WHERE product_sku='". $sku ."'";
            $result = mysqli_query(DB::connect(), $sql);
            mysqli_close(DB::connect());
        }
        
        abstract public function setAttribute($attribute);
        abstract public function getAttribute();
        abstract public function insert();
        abstract public function print();
    }
?>
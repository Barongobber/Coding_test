<?php
    class Dvd extends Product
    {
        private $size;

        public function __construct($_type = "", $_sku = "", $_name = "", $_price = 0, $_size = 0)
        {
            parent::__construct($_sku, $_name, $_price, $_type);
            $this->setAttribute($_size);
        }
        
        public function insert()
        {
            $sql = "INSERT INTO product (product_sku, product_type, product_name, product_price, product_attribute) VALUES ('". $this->getSku() ."', '". $this->getType() ."', '"
            . $this->getName() ."', '". $this->getPrice() ."', '". $this->getAttribute() ."')";
            mysqli_query(DB::connect(), $sql);
            mysqli_close(DB::connect());
        }

        //getter
        // public function getSize()
        // {
        //     return $this->size;
        // }

        public function getAttribute()
        {
            return $this->size;
        }

        //setter
        public function setAttribute($size)
        {
            $this->size = $size;
        }


        public function print()
        {
            echo "<div class='col-3 mb-3 d-flex justify-content-center' >" .
            "<div class='card' style='min-width: 100%;'>".
                "<div class='card-body'>".
                    "<input type='checkbox' class='delete-checkbox text-left' value='". $this->getSku() ."'>".
                    "<div class='text-center'>".
                        "<p class='card-text m-0'>". $this->getSku() ."</p>".
                        "<p class='card-text m-0'>". $this->getName() ."</p>".
                        "<p class='card-text m-0'>". $this->getPrice() ." $</p>".
                        "<p class='card-text m-0'>Size: " . $this->getAttribute() . " MB</p>".
                    "</div>".
                "</div>".
            "</div>".
        "</div>";
        }
    }
?>
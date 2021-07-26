<?php
    class Furniture extends Product 
    {
        private $height;
        private $width;
        private $length;

        public function __construct($_type = "", $_sku = "", $_name = "", $_price = 0, $_content)
        {
            parent::__construct($_sku, $_name, $_price, $_type);
            $this->setAttribute($_content);
        }
        
        public function insert()
        {
            $sql = "INSERT INTO product (product_sku, product_type, product_name, product_price, product_attribute) VALUES ('". $this->getSku() ."', '". $this->getType() ."', '"
            . $this->getName() ."', '". $this->getPrice() ."', '". $this->getAttribute() ."')";
            mysqli_query(DB::connect(), $sql);
            mysqli_close(DB::connect());
        }

        //getter
        public function getAttribute()
        {
            return $this->getHeight(). "x". $this->getWidth() . "x" . $this->getLength();
        }

        public function setAttribute($content)
        {
            $attribute =  explode('x', $content);
            $this->setHeight($attribute[0]);
            $this->setWidth($attribute[1]);
            $this->setLength($attribute[2]);
        }

        public function getHeight()
        {
            return $this->height;
        }

        public function getWidth()
        {
            return $this->width;
        }
        
        public function getLength()
        {
            return $this->length;
        }


        public function setHeight($_height)
        {
            $this->height = $_height;
        }
        
        public function setWidth($_width)
        {
            $this->width = $_width;
        }

        public function setLength($_length)
        {
            $this->length = $_length;
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
                        "<p class='card-text m-0'>Dimension: ". $this->getHeight() ." CM x". $this->getWidth() ."CM x". $this->getLength() . " CM</p>".
                    "</div>".
                "</div>".
            "</div>".
        "</div>";
        }
        
        public static function showForm()
        {
            echo "<label for='height' class='col-md-1'>Height</label>".
            "<input class='col-md-2' type='number' id='height' name='Content[]' placeholder='Insert Product Height (CM)'  required><br>" . 
            "<label for='width' class='col-md-1'>Width</label>".
            "<input class='col-md-2' type='number' id='width' name='Content[]'  placeholder='Insert Product Width (CM)' required><br>".
            "<label for='length' class='col-md-1'>Length</label>".
            "<input class='col-md-2' type='number' id='length' name='Content[]' placeholder='Insert Product Length (CM)'  required>".
            "<p class='text-muted'>".
                "please provide dimension in HxWxL format".
            "</p>";
        }
    }
?>
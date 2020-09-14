<?php
    class ProductModel extends DB{
        public function GetProduct(){
           $query = "SELECT * FROM products";
           return mysqli_query($this->con, $query);
        }
    }
?>
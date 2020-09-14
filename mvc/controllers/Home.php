<?php
    class Home extends Controller{
        function Homepage()
        {
            //Model
            $p = $this->model("ProductModel");
            //View
            $this->view("Layout", ["Pro"=> $p->GetProduct(),
            "Color"=>"red"]);
        }
    }
?>
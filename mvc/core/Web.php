<?php
class web{

    protected $controller="Home";
    protected $action="Homepage";
    protected $params=[];

    function __construct(){
         $arr = $this->getUrl();
        // print_r($arr);

         if(file_exists("./mvc/controllers/".$arr[0].".php")){
             $this->controller = $arr[0];
         }
         require_once "./mvc/controllers/". $this->controller .".php";
         $this->controller = new $this->controller;

         if(isset($arr[1])){
             if(method_exists($this->controller , $arr[1]))
             {
                $this->action = $arr[1];
             }
         }

         call_user_func_array([$this->controller, $this->action],$this->params);
       
    }

    function getUrl(){
        if(isset($_GET["url"])){
             return explode("/",filter_var(trim($_GET["url"], "/")) ); 
        }
    }
}
?>
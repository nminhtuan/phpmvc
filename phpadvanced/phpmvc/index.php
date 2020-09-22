
<?php
require_once("controller/controller.php");
session_start();

$controller=new Controller();
if(isset($_GET['do'])) {
    if($_GET['do']=="login"){
        $controller->view_login();
    }
    if($_GET['do']=="logout"){
        $controller->view_logout();
    }
    if($_GET['do']=="insert"){
        $controller->view_insert_game();
    }
    if($_GET['do']=="cart"){
        $controller->view_cart();
    }
} else {
    if(isset($_GET['id'])){
        $controller->view_game();
    }
    else{
        $controller->view_all_game();
    }
}




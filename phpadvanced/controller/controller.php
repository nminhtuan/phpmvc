<?php
require_once("model/Database.php");

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
class Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function view_all_game()
    {
        $games = $this->db->get_list_game();
        include "view/gameList.php";
    }

    public function view_game()
    {
        $game = $this->db->get_row_game($_GET['id']);
        if (isset($game)) {
            $name=$game->name;
            $_SESSION[$name]=0;
            include "view/viewGame.php";
        }
        //header("location:index.php");
    }

    public function view_login()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $name = test_input($_POST["txtUsername"]);
            $pass = $_POST["txtPassword"];
            $user = $this->db->get_user($name, $pass);
            if($user==null){
                header("location:index.php?do=login");
            }else {
                $_SESSION['user'] = $user;
                header("location:index.php");
            }
        } else {
            include_once "view/login.php";
        }
    }

    public function view_logout(){
        session_destroy();
        header("location:index.php");
    }

    public function view_insert_game()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $name=test_input($_POST['txtName']);
                $cost=addslashes($_POST['noCost']);
                $quantity= addslashes($_POST['noQuantity']);
                $nameFile=basename($_FILES["fileupload"]["name"]);

                if (!isset($_FILES["fileupload"])) {
                    header("location:index.php");
                }
                if ($_FILES["fileupload"]['error'] != 0) {
                    header("location:index.php");
                }

                $target_dir = "./view/images/";
                $target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
                $allowUpload = true;
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                $maxfilesize = 1000000;
                $allowtypes = array('jpg', 'png', 'jpeg', 'gif');
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
                    if ($check !== false) {
                        $allowUpload = true;
                    } else {
                        echo "<script> alert('File upload is not IMAGE!!');</script>";
                        $allowUpload = false;
                    }
                }
                if (file_exists($target_file)) {
                    $allowUpload = false;
                }
                // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
                if ($_FILES["fileupload"]["size"] > $maxfilesize) {
                    $allowUpload = false;
                }
                if (!in_array($imageFileType, $allowtypes)) {
                    echo "<script> alert('File is not JPG, PNG, JPEG, GIF');</script>";
                    $allowUpload = false;
                }
                if ($allowUpload) {
                    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
                        $game=new Game($name,$cost,$quantity,$nameFile);
                        $this->db->insert_game($game);
                        header("location:index.php");
                    }else {
                        echo "<script> alert('UPLOAD ERROR!!');</script>";
                    }
                } else {
                    echo "<script> alert('UPLOAD ERROR');</script>";
                }
            } else {
                include_once "view/insertGame.php";
            }
        }else{
            header("location:index.php?do=login");
        }
    }

    public function view_insert_games(){
        if (isset($_POST['submit']))
        {
            $this->db->insert_games($_FILES['filename']['tmp_name'], "r");
            $this->view_all_game();
        }
    }

    public function view_cart(){
    include_once "view/viewcart.php";
    }

}
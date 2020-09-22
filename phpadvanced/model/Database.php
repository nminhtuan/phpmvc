<?php
require_once("model/Game.php");
require_once("model/User.php");

class Database{
	protected $conn;
	
	public function __construct(){
			$hostName="localhost";
			$userName="root";
			$pass='';
			$dbName="php";
            $this->conn = mysqli_connect($hostName, $userName, $pass, $dbName);
            mysqli_set_charset($this->conn, 'UTF8');
	}
	public function __destruct(){
		if($this->conn){
			mysqli_close($this->conn);
		}
	}


	public function insert_game($game){
        $sql = "INSERT INTO game(name,price,quantity,img) VALUES ('$game->name','$game->price','$game->quantity', '$game->img')";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
	}
	public function insert_games($file)
    {
        $load = fopen($file, "r");
        while (!feof($load)) {
            $csv = fgetcsv($load);
            $url = $csv[3];
            $img = "./view/images/".basename($url);
            file_put_contents($img, file_get_contents($url));
            $game=new Game($csv[0],$csv[1],$csv[2],basename($csv[3]));
            $this->insert_game($game);
            $url = $csv[3];
            $img = "./view/images/".basename($url);
            file_put_contents($img, file_get_contents($url));
        }
        fclose($file);
        return true;
    }

	public function get_list_game(){
		$sql="select * from game where quantity>0";
		$result=mysqli_query($this->conn,$sql);
		if(!$result){
			die('Please connect database !');
		}
        $listGame=array();
        while($row=mysqli_fetch_assoc($result)){
            $temp=new Game($row['name'],$row['price'],$row['quantity'],$row['img']);
            array_push($listGame,$temp);
        }
		return $listGame;
	}
	public function get_row_game($name){
	    $result=$this->get_list_game();
        foreach ($result as $item) {
            if($item->name==$name){
                return $item;
            }
        }
        return null;
	}

    public function get_user($username,$password)
    {
        $sql = "select * from user where username like '$username' and password like '$password'";
        $query = mysqli_query($this->conn, $sql);

        $row = mysqli_fetch_assoc($query);
        if ($row != NULL) {
            return new User($row['username'], $row['password']);
        }
        return null;
    }

}

?>
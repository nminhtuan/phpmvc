<?php
class Game{
	public $name;
	public $price;
	public $quantity;
	public $img;
	
	public function __construct($name,$price, $quantity, $img){
		$this->name=$name;
		$this->price=$price;
		$this->quantity=$quantity;
		$this->img=$img;
	}
}
?>	
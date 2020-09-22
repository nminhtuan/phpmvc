<?php
class Game{
	public $name;
	public $img;
	public $cost;
	public $qtt;

	public function __construct($name,$cost, $qtt, $img){
		$this->name=$name;
		$this->img=$img;
		$this->cost=$cost;
		$this->qtt=$qtt;
	}



}
?>	
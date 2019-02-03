<?php

class Monster {

	private $name;
	private $strength;
	private $type;
	private $life;

	function __construct($name,$strength,$life,$type){
		$this->name = $name;
		$this->strength = $strength;
		$this->type = $type;
		$this->life = $life;

	}

	function getname(){ 
		return $this->name;
}



	function getstrength(){ 
		return $this->strength;
}

	function gettype(){ 
		return $this->type;
}

	function getlife(){ 
		return $this->life;
}
	function setname($nom){ 
		$this->name=$nom;
}

}


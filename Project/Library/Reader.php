<?php

//Use iclude_once(() because other classes are also including Person.php
include_once("Person.php");
class Reader extends Person {
	
	// Attributes
	private $profession="none";
	private $id;

	public function __construct($name, $sex, $dateofbirth, $profession, $id){
		parent::__construct($name, $sex, $dateofbirth);
		$this->profession = $profession;
		$this->id = $id;
	}
	
	public function __toString(){
		$temp = parent::__toString();
		$temp .= ", " . $this->profession;
		$temp .= ", reader id: " . $this->id;
		return $temp; 
	}
	
	
}


?>
<?php
//Use iclude_once(() because other classes are also including Person.php
include_once("Person.php");
class Author extends Person {
	
	// Attributes
	private $nationality="none";
	private $livingStatus="true"; // false = dead

	public function __construct($name, $sex, $dateofbirth, $nationality, $livingStatus, $id){
		parent::__construct($name, $sex, $dateofbirth);
		$this->nationality = $nationality;
		$this->livingStatus = $livingStatus;
		$this->id = $id;
	}
	
	public function __toString(){
		
		$temp = parent::__toString();
		$temp .= ", nationality: " . $this->nationality;
		if($this->livingStatus==true)
			$temp .= ", author living";
		else
			$temp .=  " author dead";
		$temp .= ", author id: " . $this->id; 
			
		return $temp;
	}
	
	
}


?>
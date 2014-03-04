<?php
class Person {
	
	// Attributes
	private $name="NoBody";
	private $sex=true; // male == true
	private $dateofbirth=0;
		
	public function __construct($name, $sex, $dateofbirth){
		$this->name = $name;
		$this->sex = $sex;
	    $this->dateofbirth = $dateofbirth;
	}
	
	/**
	 * Returns name and sex data.
	 * @return name and sex
	 */
	
	public function __toString(){
		$temp = $this->name;
		$temp .= ", ";
		if($this->sex==true)
			$temp = $temp . "male, ";
		else
			$temp= $temp . "female, ";
		$temp .= "born ". $this->dateofbirth;
			
		return $temp;
	}

}
?>


<?php

class person{
		
	protected $name;
	protected $address;
	protected $email;
	
}


class student extends person{

	private $id;
	private $course;

		public function __construct($a, $b, $c, $d, $e){
			$this->name = $a;
			$this->address = $b;
			$this->email = $c;
			$this->id = $d;
			$this->course = $e;
	}
public function getData(){
		$details = array("Student name: "=>$this->name,
						"Student address: "=>$this->address,
						"Email address: "=>$this->email,
						"Student Id: "=>$this->id,
						"Course: "=>$this->course);
			return $details;
	}
}



$object = new student("Tom Scott","London", "tom@nikwax.com", "17", "PHP Course");

$data = $object->getData();
	foreach($data as $key=>$val){
		echo $key . $val . "<br/>";
	}


?>
<?php

class trainService{
	protected $speed;
	protected $colour;
	protected $capacity;
	protected $route;
	protected $depTime;
}

class underground extends trainService{
	
	private $routeName;
	private $routeColourCode;

public function __construct($a, $b, $c, $d, $e, $f, $g){
			$this->speed = $a;
			$this->colour = $b;
			$this->capacity = $c;
			$this->route = $d;
			$this->depTime = $e;
			$this->routeColourCode = $f;
			$this->routeName = $g;

	}
	public function getData(){
		$details = array("Train Speed: "=>$this->speed,
						"Train Colour: "=>$this->colour,
						"Capacity: "=>$this->capacity,
						"Route: "=>$this->route,
						"Departure Time: "=>$this->depTime,
						"Route Name : "=>$this->routeName,
						"Route Colour Code : "=>$this->routeColourCode);
			return $details;
	}
}

class overGround extends trainService{

		private $serviceProvider;
		private $ukCounty;

	public function __construct($a, $b, $c, $d, $e, $f, $g){
			$this->speed = $a;
			$this->colour = $b;
			$this->capacity = $c;
			$this->route = $d;
			$this->depTime = $e;
			$this->serviceProvider = $f;
			$this->ukCounty = $g;

	}
	public function getData(){
		$details = array("Train Speed: "=>$this->speed,
						"Train Colour: "=>$this->colour,
						"Capacity: "=>$this->capacity,
						"Route: "=>$this->route,
						"Departure Time: "=>$this->depTime,
						"Service Type: "=>$this->serviceProvider,
						"Location within UK: "=>$this->ukCounty);
			return $details;
	}
}

$overGroundService = new overGround("50","Red","1000","Charing Cross - Excel","1540", "Soutern", "Kent");
$underGroundService = new underGround("70","Blue","500","London Bridge - Moorgate","1400", "Pink", "Hammersmith");
?>

<strong>Overground Information:</strong><br/>
<?php
$data = $overGroundService->getData();
	foreach($data as $key=>$val){
		echo $key . $val . "<br/>";
	}
?>
<br/>
<strong>Underground Information:</strong><br/>
<?php
$data = $underGroundService->getData();
	foreach($data as $key=>$val){
		echo $key . $val . "<br/>";
	}
?>
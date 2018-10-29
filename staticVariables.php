<?php
	
	class a {

		public static $x;
		public $y;

		public static function display(){
			self::$x=1000;
			$this->y = 2000;
		}	
	}

$a1 = new a();
$a2 = new a();

$a1::$x=1000;

echo $a1::$x;
echo $a2::$x;
#this should fail
echo a::$y;

?>
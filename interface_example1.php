<?php
	
	interface a {

		public function getA();
	}


class imp implements a {

	public function getA(){

		echo "From getA();";
	}
}

$i = new imp;

$i->getA();
?>
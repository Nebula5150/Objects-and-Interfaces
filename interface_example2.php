<?php


#Interfaces are all abstract
	interface A {

		public function getA();

	}
	interface B {
		
		public function getB();

	}
	interface C extends A,B {
		
		public function getC();

	}

abstract class imp1 implements C {

	public function getA() {
		
		echo "Result of getA();";

	}
}	

class imp2 extends imp1 {
	
	public function getB() {
		
		echo "Result of getB();";
	}
	public function getC() {
		
		echo "Result of getC();";
	}
}
$i = new imp2();

$i ->getA();
$i ->getB();
$i ->getC();
?>
<?php

#Abstract class - can't be instantiated
	abstract class database{
	
			abstract public function getConnection();
	}

class Mysql extends database{

	public function getConnection() {

		echo "Connecting to MYSQL";
	}
}

class MsAccess {

		public function getConnection () {
			echo "Connecting to MSACCESS";
		}
}

$ref = new Mysql();
$ref->getConnection();
$ref = new MsAccess();
$ref->getConnection();
#Following will fail as the an abstract class is trying to be instantiated
$ref = new database();
?>

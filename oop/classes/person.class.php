<?php

class Person {
	// properties
	private $name;
	private $age;

	public static $drinkingAge = 21;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	// methods
	public function getPerson() {
		$person = $this->name . " is " . $this->age . " years old.";

		return $person;
	}
}
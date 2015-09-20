<?php 

class StaticMethod {

	private static $_instance;

	private $value;

	public function __construct() {
		echo "Construct!";
	}

	public static function getInstance($value) {
		// Singaleton
		if(!(self::$_instance instanceof StaticMethod)) {
			self::$_instance = new StaticMethod();
		}

		self::$_instance->value = $value;
		return self::$_instance;
	}

	public function sum($value) {
		$this->value += $value;
		return $this;
	}

	public function minus($value) {
		$this->value -= $value;
		return $this;
	}

	public function multiply($value) {
		$this->value *= $value;
		return $this;
	}

	public function get() {
		return $this->value;
	}

	public function __destruct() {
		echo "Destruct!";
	}

}

 ?>

<?php 


class DynamicChain {

	private $num;

	public function __construct($num) {
		$this->num = $num;
	}

	public function sum($num) {
		$this->num += $num;
		return $this;
	}

	public function minus($num) {
		$this->num -= $num;
		return $this;
	}

	public function get() {
		return $this->num;
	}

}


 ?>
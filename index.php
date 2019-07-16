<?php 

/**class Students {

	public $name = 'vasia';

	public function getRandom() {
		return 42;
	}
}

$students = new Students;
echo $students->getRandom();
$students->name = 'masha';
echo $students->name;

class Salary {

	public $amount;

	public function __construct($amount) {
		$this->amount = $amount;
		$this->amount = $this->calcTax();
	}

	public function calcTax() {
		return $this->amount * 0.25;
	}
}

$salary = new Salary(100);
echo $salary->amount;*/

class Salary {
	private static $amount = 100;
	public static function getAmount() {
		return self::calcTax();
	}
	private static function calcTax() {
		return self::$amount * 0.25;
	}
}

$salary = Salary::getAmount();
echo $salary;


 ?>
<?php 

/**Создайте класс Math и реализйте методо calcFactorial($number) который будет расчитывать факториал целых чисел*/

class Math {
	
	public function calcFactorial($number) {
		if ($number == 0) {
			return 1;
		} else {
			for ($i = 1, $result = 1; $i <= $number; $i++) {
				$result *= $i;
			}
			return $result;
		}
	}
}

$math = new Math();

echo $math->calcFactorial(33) . "<br>";
echo $math->calcFactorial(0) . "<br>";
echo $math->calcFactorial(-2) . "<br>";

 ?>
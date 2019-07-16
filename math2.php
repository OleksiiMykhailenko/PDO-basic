<?php 

/**Дополните класс Math из предыдущего задание и реализуйте метод для простого калькулятора*/

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

	public function calculator($oper, $a, $b) {
		if ($oper == 'sum') {
			return $a + $b;
		}
		else if ($oper == 'sub') {
			return $a - $b;
		}
		else if ($oper == 'mul') {
			return $a * $b;
		}
		else if ($oper == 'div') {
			if ($b != 0) {
				return $a / $b;
			}
			else {
				echo "It is impossible to divide by zero!";
			}
		}
	}
}

$math = new Math();

echo $math->calcFactorial(33) . "<br>";
echo $math->calcFactorial(0) . "<br>";
echo $math->calcFactorial(-2) . "<br>";

echo $math->calculator('sum', 2, 2) . "<br>";
echo $math->calculator('sub', 5, 2) . "<br>";
echo $math->calculator('mul', 5, 4) . "<br>";
echo $math->calculator('div', 40, 4) . "<br>";
echo $math->calculator('div', 5, 0) . "<br>";

 ?>
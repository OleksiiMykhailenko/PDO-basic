<?php 

/**Создайте класс который будет принимать массив целых чисел при создании объекта класса и сортировать их (можно использовать PHPешный sort()), также создайте свойсвтво где этот массив будет хранится и метод для получения этого свойства.*/

class MyNewArray {
	
	public $array;

	public function __construct($array) {
		$this->array = $array;
		sort($this->array);
	}

	public function GetArray() {
		return $this->array;
	}
}

$getarray = new MyNewArray([0, -5, 4, 5, 2, -3, -1, -2, 1, 3, -4]);

var_dump($getarray->GetArray());

 ?>
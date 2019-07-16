<?php 

/**Создайте класс Accounting (например часть бухгальерской программы) и реализуйте следующий функционал:
 - метод для получения данных о пользователе, например ФИО, номер счета, сколько   начисленно, сколько вычтенно налогов и тд на ваше усмотрение, данные должны быть представленны в массиве. 
- метод для добавление новых записей в массив с данными о пользователе
- метод для удаление записи о пользователе
- метод для редактирования записи о пользователе
- метод который считает количество налогов которые будут вычтенны из ЗП*/

class Accounting {

	public $workers = [];

	public function addWorker($id, $FIO, $accnumb, $accruals, $tax) {
		$this->workers[$id] = [
			"FIO" => $FIO,
			"accnumb" => $accnumb,
			"accruals" => $accruals,
			"tax" => $tax
		];		
	}

	public function getWorker($id) {
		return $this->workers[$id];
	}

	public function unsetWorker($id) {
		unset($this->workers[$id]);
	}

	public function editingWorker($id, $value, $replacement) {
		return $this->workers[$id][$value] = $replacement;
	}

	public function calcTaxWorker($id) {
		return $this->workers[$id]["accruals"] * 0.25;
	}
}

$accounting = new Accounting();

$accounting->addWorker(1, "Oleksii Mykhailenko", 123456, 10000, 2500);
$accounting->addWorker(2, "Vasia Vasichkin", 654321, 10000, 2500);
$accounting->addWorker(3, "Masha Pupkina", 678910, 10000, 2500);

var_dump($accounting->getWorker(1));
var_dump($accounting->getWorker(2));
var_dump($accounting->getWorker(3));

//$accounting->unsetWorker("3");

$accounting->editingWorker(3, "accnumb", 777777);
var_dump($accounting->getWorker(3));

echo $accounting->calcTaxWorker(1);










 ?>
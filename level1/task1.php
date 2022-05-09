<!DOCTYPE html>
<html>

<head>
	<title>Task1</title>
	<meta charset="utf-8" />

</head>

<body>
	<?php

	/*1. Перемістити всі негативні елементи в кінець.
    Дано одновимірний несортований масив $numbers, який містить як від'ємні так і
    позитивні числа. Завдання полягає в тому, щоб розмістити всі негативні
    елементи в кінці масиву, не змінюючи порядок слідування позитивних та
    негативних елементів масиву
        */

	echo "Task1";

	$numbers = [1, -1, 3, 2, -7, -5, 11, 6];
	echo implode(" ", $numbers);
	echo PHP_EOL;

	$negativeNumber = 0; //кількість від'ємних чисел
	foreach ($numbers as $a) {
		if ($a < 0)
			$negativeNumber++;
	}

	for ($i = 0; $i < count($numbers); $i++) {
		if ($numbers[$i] < 0 && $negativeNumber > 0) {
			array_push($numbers, $numbers[$i]);
			$numbers[$i] = null;
			$negativeNumber--;
		}
		if ($numbers[$i] == null && isset($numbers[$i + 1]) && $numbers[$i + 1] != null) { //якщо значення пусте а наступне ні -> заміняти
			$numbers[$i] = $numbers[$i + 1];
			$numbers[$i + 1] = null;
		}
		if ($numbers[$i] < 0 && $negativeNumber > 0)
			$i--;
	}
	//var_dump($numbers);

	//видалення null значень
	$check = [];
	foreach ($numbers as $value) {
		if ($value != null) {
			$check[] = $value;
		}
	}
	$numbers = $check;

	echo PHP_EOL . "_____________________________________" . PHP_EOL;

	echo implode(" | ", $numbers);
	echo PHP_EOL;

	?>

</body>

</html>
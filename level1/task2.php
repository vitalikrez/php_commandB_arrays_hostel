<!DOCTYPE html>
<html>

<head>
    <title>Task2</title>
    <meta charset="utf-8" />

</head>


<body>
    <?php

    /*
    2. Об'єднання (union) двох масивів.
    Дано два одновимірних масива: $a та $b, які містять різну к-сть елементів (мають
    різну довжину). Завдання полягає в тому, щоб знайти об'єднання (union) цих двох
    масивів. Під об'єднанням, мається на увазі результуючий масив, що містить різні
    елементи з обох масивів. Якщо є повторення елементів, то в результуючий масив
    повинно потрапляти лише одне входження повторюваного елемента. Виведіть
    елементи результуючого унікального масива через символ “кома”, а також загальну
    к-сть і суму ел-тів в цього масива. Для цього використовуйте відповідні вбудовані
    функції php для роботи з масивами.
    */

    define('len_arr1', 5);
    define('len_arr2', 10);

    $arr1 = [];
    $arr2 = [];

    for ($i = 0; $i < len_arr1; $i++) {
        $arr1[$i] = rand(0, 10);
    }

    echo PHP_EOL;
    print_r(implode(', ', $arr1));
    echo PHP_EOL;

    for ($i = 0; $i < len_arr2; $i++) {
        $arr2[$i] = rand(0, 10);
    }

    print_r(implode(', ', $arr2));
    echo PHP_EOL;
    echo PHP_EOL;

    for ($i = 0; $i < count($arr2); $i++) {
        $arr1[] = $arr2[$i];
    }

    sort($arr1);
    $result = array_unique($arr1);

    print_r(implode(', ', $result));
    echo PHP_EOL;

    echo "Кількість елементів - " . count($result) . PHP_EOL;
    echo "Сума елементыв масиву - " . array_sum($result) . PHP_EOL;
    ?>

</body>

</html>
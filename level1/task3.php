<!DOCTYPE html>
<html>

<head>
    <title>Task3</title>
    <meta charset="utf-8" />

</head>

<body>
    <?php
    /*3. Підмасив (subarray) із заданою сумою елементів.
    Дано одновимірний невідсортований масив $nums, який містить лише позитивні
    числа. Необхідно знайти безперервний підмасив (subarray), сума елементів якого
    рівна значенню константи SUM. Якщо таких subarrays є декілька у вхідному масиві, -
    слід повернути підмасив, який з'являється першим при русі зліва направо.
    Завдання полягає в тому, щоб вивести позиції (ключі, а не значення), першого та
    останнього елемента підмасива (subarray). Див приклади нижче.
    */
    define('SUM', 10);
    define('len_arr', 10);
    $nums = [];

    for ($i = 0; $i < len_arr; $i++) {
        $nums[$i] = rand(0, 10);
    }

    for ($i = 0; $i < len_arr; $i++) {
        $sum = 0;
        for ($j = $i; $j < len_arr; $j++) {
            $sum += $nums[$j];
            if ($sum == SUM) {
                $a = $i;
                $b = $j;
            }
        }
    }
    echo PHP_EOL;

    echo "Сума = " . SUM;
    echo PHP_EOL;
    echo PHP_EOL;

    print_r(implode(', ', $nums));
    echo PHP_EOL;
    echo PHP_EOL;

    echo "Початок в позиції № $a. Закінчення в поциції № $b" . PHP_EOL;

    ?>

</body>

</html>
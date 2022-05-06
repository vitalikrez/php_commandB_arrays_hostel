<!DOCTYPE html>
<html>

<head>
    <title>Task2</title>
    <meta charset="utf-8" />

</head>

<body>
    <?php
    /* 2. Транспонування матриці.
    Напишіть php-скрипт, який буде транспонувати задану квадратну матрицю без
    використання додаткового масива. Транспонована матриця - це матриця,
    отримана із вихідної матриці шляхом заміни рядків на стовпці. Нижче наводиться
    два приклади транспонованої матриці.
        */

    define('x', 4);
    define('y', 3);

    $nums = [[], []];

    echo PHP_EOL;
    for ($i = 0; $i < x; $i++) {
        for ($j = 0; $j < y; $j++) {
            $nums[$i][$j] = rand(0, 10);
            echo $nums[$i][$j] . " ";
        }
        echo PHP_EOL;
    }
    echo PHP_EOL;

    //з викорситанням стандарних функцій
    array_unshift($nums, null);
    $nums = call_user_func_array('array_map', $nums);
    for ($i = 0; $i < y; $i++) {
        for ($j = 0; $j < x; $j++) {
            echo $nums[$i][$j] . " ";
        }
        echo PHP_EOL;
    }

    echo PHP_EOL;

    //без використання стандартних функцій
    for ($i = 0; $i < y; $i++) {
        for ($j = $i; $j < x; $j++) {
            $temp = $nums[$i][$j];
            $nums[$i][$j] = $nums[$j][$i];
            $nums[$j][$i] = $temp;
        }
    }

    for ($i = 0; $i < y; $i++) {
        for ($j = 0; $j < x; $j++) {
            echo $nums[$i][$j] . " ";
        }
        echo PHP_EOL;
    }
    ?>

</body>

</html>
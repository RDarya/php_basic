<?php
/* Задание 1 */
$a = 9;
$b = 8;

if ($a > 0 && $b > 0){
    echo $a - $b;
    echo '<br>';
} elseif ($a < 0 && $b < 0){
    echo $a * $b;
} elseif ($a > 0 && $b < 0 || $a < 0 && $b > 0) {
    echo $a + $b;
}


/* Задание 2 */

$arg1 = 4;
$arg2 = 5;

function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}

function dif($arg1, $arg2) {
    return $arg1 - $arg2;
}

function mul($arg1, $arg2) {
    return $arg1 * $arg2;
}

function div($arg1, $arg2) {
    if ($arg2 == 0) {
        return 'Деление на 0!';
    }
    return $arg1 / $arg2;
}

echo sum($a, $b);
echo '<br>';
echo dif($a, $b);
echo '<br>';
echo mul($a, $b);
echo '<br>';
echo div($a, $b);
echo '<br>';



/* Задание 3 */

$arg1 = 6;
$arg2 = 5;

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'sum':
            echo $arg1 + $arg2;
            break;
        case 'dif':
            echo $arg1 - $arg2;
            break;
        case 'mul':
            echo $arg1 * $arg2;
            break;
        case 'div':
            echo $arg1 / $arg2;
            break;
    }
}

echo '<br>';
echo mathOperation ($arg1, $arg2, 'sum');
echo '<br>';
echo mathOperation ($arg1, $arg2, 'dif');
echo '<br>';
echo mathOperation ($arg1, $arg2, 'mul');
echo '<br>';
echo mathOperation ($arg1, $arg2, 'div');
echo '<br>';echo '<br>';




/* Задание 4
Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон,
вывести текущий год в подвале при помощи встроенных функций PHP */

$title = 'Title 1';
$content = 'Content';
$date = date('Y');
?>

<h1><?php echo $title?></h1>
<p><?php echo $content?></p>
<p><?php echo  $date?></p>



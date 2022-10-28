<!--Задание 6.-->
<!--*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function-->
<!--power($val, $pow), где $val – заданное число, $pow – степень.-->
<?php
$val = rand(-10, 10);
$pow = rand(-10, 10);

function power ($val, $pow) {
    if ($pow === 0) {
        return 1;
    }
    if ($pow === 1) {
        return $val;
    }
    if ($pow < 0) {
        return power(1/$val, -$pow);
    }
    return $val * power($val, $pow - 1);
}

echo "$val в степени $pow = " . power ($val, $pow);

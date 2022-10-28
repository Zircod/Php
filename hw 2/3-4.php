<!--Задание 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.-->
<!--Обязательно использовать оператор return.-->

<?php
$a = rand(-99, 99);
$b = rand(-99, 99);
echo "Переменная а = $a, b = $b <br>";

function sum ($a, $b) {
    return $a + $b;
}

function subtraction ($a, $b) {
    return $a - $b;
}

function multiplication ($a, $b) {
    return $a * $b;
}

function division ($a, $b) {
    return ($b !== 0) ? round($a / $b , 2) : "Делить на 0 нельзя";
}

echo "<br> Sum ";
echo sum($a, $b);
echo "<br> Subtraction ";
echo subtraction($a, $b);
echo "<br> Multiplication ";
echo multiplication($a, $b);
echo "<br> Division ";
echo division($a, $b);
?>

<!--Задание 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),-->
<!--где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В-->
<!--зависимости от переданного значения операции выполнить одну из арифметических операций-->
<!--(использовать функции из пункта 3) и вернуть полученное значение (использовать switch)-->

<?php
echo "<hr>";
//получим рандомный оператор
$randomOperation = rand(1,4);

switch ($randomOperation) {
    case 1: $operation = "+";
        break;
    case 2: $operation = "-";
        break;
    case 3: $operation = "*";
        break;
    case 4: $operation = "/";
        break;
}

echo "Оператор: $operation";

function mathOperation($a, $b, $operation) {
    switch ($operation) {
        case "+":
            echo "<br> Sum ";
            echo  sum ($a, $b);
            break;
        case "-":
            echo "<br> Subtraction ";
            echo  subtraction($a, $b);
            break;
        case "*":
            echo "<br> Multiplication ";
            echo multiplication($a, $b);
            break;
        case "/":
            echo "<br> Division ";
            echo division($a, $b);
            break;
    }
}

mathOperation($a, $b, $operation);

//или
function calc($a, $b, $operation) {
    if (!function_exists($operation)) {
        return 0;
    }
    return $operation($a, $b);
}
echo "<hr>";
echo calc($a, $b, 'sum');
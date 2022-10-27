<!--Задание 7.-->
<!--*Написать функцию, которая вычисляет текущее время и возвращает его в формате с-->
<!--правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты-->

<?php
/*
 * 0, 5-20... часов, минут
 * 1, 21... час, минута
 * 2,3,4,22,23,24... часа, минуты
*/
echo $time = time();
echo $hours = date("H", $time);
echo $minutes = date("i", $time);

$hoursNames = array( 'часов','час', 'часа');
$minutesNames = array('минут', 'минута', 'минуты');

$getLastHourDigit = ($hours > 19) ? $hours % 10 : $hours;
$getLastMinuteDigit = ($minutes > 19) ? $minutes % 10 : $minutes;

//function getTimeName ($time, $names, $getLastDigit) {
//    switch ($getLastDigit) {
//        case 0:
//        case ($getLastDigit > 5 && $getLastDigit < 20):
//            echo "$time $names[0]";
//            break;
//        case (1):
//            echo "$time $names[1]";
//            break;
//        case (2):
//        case (3):
//        case (4):
//            echo "$time $names[2]";
//            break;
//    }
//}
//echo "<br>";
//getTimeName($hours, $hoursNames, $getLastHourDigit);
//echo "<br>";
//getTimeName($minutes, $minutesNames, $getLastMinuteDigit);

//или
function getTimeName($time, $names, $getLastDigit) {
    if ($getLastDigit === 0 || ($getLastDigit > 5 && $getLastDigit < 20)) {
        return "$time $names[0]";
    }
    if ($getLastDigit === 1) {
        return "$time $names[1]";
    }
    if ($getLastDigit > 1 && $getLastDigit < 5) {
        return "$time $names[2]";
    }
}

echo "<br>";
echo getTimeName($hours, $hoursNames, $getLastHourDigit);
echo "<br>";
echo getTimeName($minutes, $minutesNames, $getLastMinuteDigit);
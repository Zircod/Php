<?php
//Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
//текущий год в подвале при помощи встроенных функций PHP.
$html = file_get_contents('main.html');
$html = str_replace(
    ['{{Title}}', '{{HEADER}}', '{{CONTENT}}'],
    ['Homework', 'Упражнение 2.5', 'Выведем год в подвале сайта'],
    $html
);
$html = str_replace('{{FOOTER}}', '&copy Все права защищены ' . date('Y') . 'г.', $html);

echo $html;

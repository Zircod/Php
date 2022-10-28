<?php
    $title = 'Homework 1';
    $header = 'Упражнение 1.4';
    $content = "Работа с php.";
    $today = date("m.d.y");

    $html =<<<php
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {$title} </title>
    </head>
    <body>
        <h1>{$header}</h1>  
        <div>{$content} </div>
        <h3>{$today}</h3>
    </body>
    </html>
php;

echo $html;
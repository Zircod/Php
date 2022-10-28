<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "title" ?></title>
</head>
<body>
    <h4>Homework 1.2</h4>
    <?php
        $a = 5 ;
        $b = '05';
        //var_dump($b);
        //var_dump($a);
        echo "<p>1. $a == $b - php неявно привод к числам, поэтому число 5 не строго равно числу 05.</p>";
        var_dump($a == $b); // Почему true?

        echo "<p>2. (int)'012345' - int явно приводит к целому числу.</p>";
        var_dump((int)'012345'); // Почему 12345?

        echo "<p>3. (float)123.0 === (int)123.0) - число с плавающей точкой не равно целому числу по типу данных.<p/>";
        var_dump((float)123.0 === (int)123.0); // Почему false?

        echo "<p>4. (int)0 === (int)'hello, world' - строка без чисел преобразуется в значение 0.<p/>";
        var_dump((int)0 === (int)'hello, world'); // Почему true?
    ?>

    <h4>Homework 1.5</h4>
    <p>1. [$a, $b] = [$b, $a]</p>
    <?php
        $a = 1;
        $b = 2;
        echo "<p>Initial values</p>";
        echo "a = " . $a . "<br>" . "b = " . $b . "<br>" ;

        echo "<p>After distracting</p>";
        [$a, $b] = [$b, $a];
        echo "a = " . $a . "<br>" . "b = "  . $b . "<br>" ;

        ?>

    <p>2. list($a, $b) = [$b, $a]</p>
    <?php
        $a = 1;
        $b = 2;
        echo "<p>Initial values</p>";
        echo "a = " . $a . "<br>" . "b = " . $b . "<br>" ;

        echo "<p>After distracting</p>";
        list($a, $b) = [$b, $a];
        echo "a = " . $a . "<br>" . "b = "  . $b . "<br>" ;
    ?>

</body>
</html>






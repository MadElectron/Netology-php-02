<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ряд Фибонначи</title>
    <style type="text/css" media="screen">
        * {
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }
    </style>

</head>
<body>
    <?php 

        function fib($n, $a = 1, $b = 1)
        {
            if ($a > $n)
                echo "<p>Задуманное число <strong>НЕ входит</strong> в числовой ряд.</p>";
            elseif ($a == $n)
                echo "<p>Задуманное число <strong>входит</strong> в числовой ряд.</p>";
            else
            {
                $c = $a;
                $a += $b;
                $b = $c;

                fib($n, $a, $b);
            }
        }

        $n =  $_GET['number'];
        echo "Введено число $number. <br>";

        fib($n);
    ?>
    <a href="index.php">Назад</a>
</body>
</html>
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

        function fib($n)
        {
            $a = 1;
            $b = 1;

            while(true)
            {

                if ($a > $n)
                {
                    echo "<p>Задуманное число <strong>НЕ входит</strong> в числовой ряд.</p>";
                    break 1;
                }
                elseif ($a == $n)
                {
                    echo "<p>Задуманное число <strong>входит</strong> в числовой ряд.</p>";
                    break 1;
                }
                else
                {
                    $c = $a;
                    $a += $b;
                    $b = $c;
                }

            }
        }

        $number =  $_GET['number'];
        echo "Введено число $number. <br>";

        fib($number);
    ?>
    <a href="index.php">Назад</a>
</body>
</html>
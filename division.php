<?php

$a = 5;
$b = 3;
$result = $a / $b;

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Мини - сайт, математика чисел 5 и 3</title>
    </head>
    <body>
        <h1>Деление чисел 5 и 3</h1>
        <p>5 / 3 = <?=number_format($result, 2, '.', '' ) ?> </p>
        <a href="/">Назад</a>

    </body>
</html>
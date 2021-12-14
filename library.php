<?php

$library = [
    'authors' => [
        'john_makkormik@example.com' => [
            'name' => 'Джон Маккормик',
            'email' => 'john_makkormik@example.com',
            'birthYear' => 1972,
        ],
        'martin_robert@example.com' => [
            'name' => 'Мартин Роберт',
            'email' => 'martin_robert@example.com',
            'birthYear' => 1952,
        ],
        'martin_fauler@example.com' => [
            'name' => 'Мартин Фаулер',
            'email' => 'martin_fauler@example.com',
            'birthYear' => 1963,
        ],
    ],
    'books' => [
        [
            'title' => 'Чистый код: создание, анализ и рефакторинг',
            'author' => 'martin_robert@example.com',
            'year' => 2013,
        ],
        [
            'title' => 'Девять алгоритмов, которые изменили будущее',
            'author' => 'john_makkormik@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Идеальный программист',
            'author' => 'martin_robert@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Шаблоны корпоративных приложений',
            'author' => 'martin_fauler@example.com',
            'year' => 2002,
        ],
    ],
];

$title = 'Библиотека программиста';
$red = (bool) rand(0, 1);



// 

if ($red == 1) {
    $randomColor = 'red';
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?=$title ?></title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<h1 class="<?= $randomColor ?>"><?=$title ?></h1>  <!--  я не особо понял, как я сделал это(почему сделал в классе)   -->
<div>Авторов на портале <? 
$a= count($library['authors']);
echo "$a";
?></div>
<!-- Выведите все книги -->
<?php foreach($library['books'] as $key => $item): ?>
  <!--  <?php var_dump($item); ?> -->
    <p class="books">Книга <?= $item['title'] ?> её написал <?= $library['authors'][$item['author']]['name'] ?> <?= $library['authors'][$item['author']]['birthYear'] ?> <?= $item['author'] ?></p> 
 <?php endforeach ?>
  <!--   <?php var_dump($item); ?>  -->

</body>
</html>

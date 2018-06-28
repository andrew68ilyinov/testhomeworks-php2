<?php

$myName     = 'Андрей';
$myLastName = 'Ильинов';
$myAge      = 49;
$myMail     = 'ai68@yandex.ru';
$myCity     = 'Ростов-на-Дону';
$myJob      = 'Книжный верстальщик';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница студента Нетологии</title>
    
    <style>
        td {
            padding: 5px;
        }
    </style>

</head>

<body>
<h1>Страница пользователя Андрей</h1>
<table>
    <tr>
        <td>Имя</td><td><?= $myName ?></td>
    </tr>
    <tr>
        <td>Фамилия</td><td><?= $myLastName ?></td>
    </tr>
    <tr>
        <td>Возраст</td><td><?= $myAge ?></td>
    </tr>
    <tr>
        <td>Электропочта</td><td><a href="mailto:ai68@yandex.ru"><?= $myMail ?></a></td>
    </tr>
    <tr>
        <td>Город</td><td><?= $myCity ?></td>
    </tr>
    <tr>
        <td>Работа</td><td><?= $myJob ?></td>
    </tr>
</table>

</body>
</html>

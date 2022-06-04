<?php
    $part1 = 'localhost'; // Сервер
    $part2 = 't103105_dbuser'; // Пользователь
    $part3 = '7z0NG>FVoRW!V*Xo'; // Пароль
    $part4 = 't103105_db'; // БД

    $mysql = new mysqli($part1, $part2, $part3, $part4);  //Сервер, пользователь, пароль, база данных

    if ($mysql == false) {
        echo "Ошибка подключения к бд";
    } // Проверка на наличия подключения
?>

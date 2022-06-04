<?php
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);   // удаляет лишние симолы и лишние пробелы 
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);   // удаляет лишние симолы и лишние пробелы 

    $error = '';
    if (trim($name) == '')
        $error = 'Введите ваше имя'; 
    else if(trim($pass) == '')
        $error = 'Введите пароль';
    if ($error != '') {
        setcookie("Err2", $error, time() + 3, '/');
        exit('<meta http-equiv="refresh" content="0; url=../insert.php" />');
    }

    $pass = md5($pass."ksa2anNs3");

    require "../blocks/connect.php";
    $result = $mysql->query("SELECT * FROM `users`
        WHERE `name` = '$name' AND `pass` = '$pass'"); // Выделит все, что является введеными данными
    $Hum = $result->fetch_assoc(); // Конвертация в массив
    if ($Hum == '') { // Если массив пуст, то выполняется условвие 
        $resi = "Такой пользователь не найден";
        setcookie("Err2", $resi, time() + 3, '/');
        exit('<meta http-equiv="refresh" content="0; url= ../insert.php" />');
    }
    setcookie("Nam2", $name, time() + 3600, '/'); 
    $mysql->close();
    header('Location: auth.php'); // Перекидывает на главное меню
?>
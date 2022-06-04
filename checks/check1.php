<?php
    $sname = filter_var(trim($_POST['sname']), FILTER_SANITIZE_STRING);     // удаляет лишние симолы и лишние пробелы 
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);       // удаляет лишние симолы и лишние пробелы 
    $tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);         // удаляет лишние симолы и лишние пробелы 
    $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);       // удаляет лишние симолы и лишние пробелы 
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);       // удаляет лишние симолы и лишние пробелы 
    $pass1 = filter_var(trim($_POST['pass1']), FILTER_SANITIZE_STRING);     // удаляет лишние симолы и лишние пробелы 

    $error = '';
    if (trim($sname) == '')
        $error = 'Введите вашу фамилию'; // выводит ошибку если пусто
    else if(trim($name) == '')
        $error = 'Введите ваше имя';    // выводит ошибку если пусто
    else if(trim($tel) == '')
        $error = 'Введите ваш телефон'; // выводит ошибку если пусто
    else if(trim($mail) == '')
        $error = 'Введите вашу почту';  // выводит ошибку если пусто
    else if(trim($pass) == '')
        $error = 'Придумайте пароль';   // выводит ошибку если пусто   
    else if(mb_strlen($pass) < 2)
        $error = 'Пароль должен быть длинее 2 символов'; // выводит ошибку если символов меньше 2
    else if(trim($pass) != trim($pass1))
        $error = 'Пароли не совпадают';  // выводит ошибку если данные в массивах не совпадают
    else if(strlen($tel) > 11)
        $error = 'Некорректный номер';  // выводит ошибку если номер меньше 11 чисел


    if ($error != '') { // Ввыполняет условие если error не пустое 
        setcookie("Err1", $error, time() + 3, '/');  // Создает куки на 3 секунды с данными об ошибке
        exit('<meta http-equiv="refresh" content="0; url=../index.php" />'); // возвращает на страницу ввода.
    }

    $pass = md5($pass."ksa2anNs3"); // Шифрует пароль

    require "../blocks/connect.php"; // Подключение БД

    $mysql->query("INSERT INTO `users` (`sname`, `name`, `tel`, `mail`, `pass`)
    VALUES('$sname', '$name', '$tel', '$mail', '$pass')"); // Вставляет данные в таблицу users 

    setcookie("Nam", $name, time() + 3600, '/'); // Создает куки с именем 
    setcookie("Email", $mail, time() + 3600, '/'); // Создает куки с почтой

    $mysql->close(); // Закрывает работу с sql 

    header('Location: auth.php'); // Переводит на главную страницу
?>
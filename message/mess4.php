<?php
    // print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['massege'];

    $error = '';
    if (trim($email) == '') // Удаляет пробелы, вночале и конце
        $error = "Введите вашу почту";
    else if(trim($message) == '') // Удаляет пробелы, вночале и конце
        $error = 'Введите текст обращения';
    else if(strlen($message) < 10) // Считает количество строк
        $error = 'Сообщение должно быть более 10 символов';

    if ($error != '') {
        setcookie("Err4", $error, time() + 3, '/'); // Создается кукифайл с информацей об ошибке 
        exit('<meta http-equiv="refresh" content="0; url= ../help.php" />'); // Выполнение дальнейших комант отменяется и идет переадрессация
    }

    $messtext = "<center><b>У одно из пользователей возникла проблема, ниже описание проблемы</b></center> </br></br> <p> $message </p>";// Сообщение записаное в массив

    $subjec = "=?utf-8?B?".base64_encode("Техническая проблема на сайте")."?=";// Оглавление сообщения

    $headers  = "Content-type: text/html; chaset=utf-8 \r\n"; // Настройки отображения и кодировки
    $headers .= "From: $email\r\n"; // Сообщение ОТ
    $headers .= "Reply-To: $email\r\n";// Ответить отправителю
    
    mail ('andreydemo02@mail.ru', $subjec, $messtext, $headers);// Первое: Кому отправляется сообщение, Оглаление, Текст сообщения, Заголовок.

    header('Location: ../help.php');// возвращение на страницу с формой
    ?>
?>
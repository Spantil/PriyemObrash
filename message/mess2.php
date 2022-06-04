<?php
    // print_r($_POST);
    $email = $_POST['email'];       // Данные о почте
    $text = $_POST['text'];         // Данные о получателе
    $text1 = $_POST['text1'];       // Данные о должности
    $message = $_POST['massege'];   // Текст сообщения

    $error = '';
    if (trim($email) == '') // Удаляет пробелы, вночале и конце
        $error = "Введите вашу почту";
    elseif (trim($text) == '') // Удаляет пробелы, вночале и конце
        $error = "Введите имя получателя";
    elseif (trim($text1) == '') // Удаляет пробелы, вночале и конце
        $error = "Введите должность получателя";
    else if(trim($message) == '') // Удаляет пробелы, вночале и конце
        $error = 'Введите текст обращения';
    else if(strlen($message) < 10) // Считает количество строк
        $error = 'Сообщение должно быть более 10 символов';

    if ($error != '') {
        setcookie("Err3", $error, time() + 3, '/');// Создается кукифайл с информацей об ошибке 
        exit('<meta http-equiv="refresh" content="0; url=../appeal1.php" />');// Выполнение дальнейших комант отменяется и идет переадрессация
    }

    $messtext = "<p><b>Обращения предназначено: $text </b> </br> <b>Должность: $text1 </p> </b> </br></br> <center><p> $message </p></center>";// Сообщение записаное в массив

    $subjec = "=?utf-8?B?".base64_encode("Жалоба от гражданина")."?=";// Оглавление сообщения

    $headers  = "Content-type: text/html; chaset=utf-8 \r\n"; // Настройки отображения и кодировки
    $headers .= "From: $email\r\n"; // Сообщение ОТ
    $headers .= "Reply-To: $email\r\n"; // Ответить отправителю
    
    mail ('andreydemo02@mail.ru', $subjec, $messtext, $headers);// Первое: Кому отправляется сообщение, Оглаление, Текст сообщения, Заголовок.


    header('Location: ../appeal1.php');// возвращение на страницу с формой
?>
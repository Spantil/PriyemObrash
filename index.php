<!doctype html>
<html lang="ru">
    <head>
    <meta charset="utf-8" />

    <title>Прием обращений</title> <!--Название для сайта-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> <!--Иконка сайта -->
    <link rel="stylesheet" href="css/style.css"/> <!--Поключение к css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/> <!--Подключение Бутстрапа-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--Подключение инструментов адаптивности-->
    <style> 
        p   {  
    text-indent: 1;
    font-size: 12px;
        } 
    </style> <!-- Настройка текста -->
    </head>

    <body>

        <div class="container d-flex flex-wrap justify-content-center mt-3" >
            <div class="row border rounded-top p-3 mb-5 ">
                <div class=" col">
                    <h1 class="text-center mb-3">Регистрация</h1>
                    <img class=" rounded mx-auto d-block mb-3" src="img\gerb2.png" alt="" width="110" height="150">

                    <form action="checks/check1.php" method="post"> <!-- Форма отправки данных -->

                        <div class="text-danger mb-3 text-center text-wrap"><!-- Текст об ошибке крассный и находится по центру  -->
                            <?php
                                error_reporting(0);// Отключает уведомления о пустом куки
                                echo htmlspecialchars($_COOKIE["Err1"]);// Показывается собержимое куки Err1
                            ?>
                        </div>

                        <input type="text" class="form-control" name="sname" id="sname" placeholder="Фамилия"><br> <!--Ввод фамилии -->
                        <input type="text" class="form-control" name="name" id="name" placeholder="Имя"><br> <!-- Ввод имени -->
                        <input type="tel" class="form-control" name="tel" id="tel" placeholder="Мобильный телефон"><br> <!--Ввод телефона -->
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="Email"><br><!--Ввод почты -->
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><!--Ввод пароля -->
                        <div class="input-group">
                            <div class="input-group-text"></div>
                            <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Повторите пароль"> <!--Повтор пароля -->
                        </div><br>
                        <div class="text-center mb-3">
                            <button class="btn btn-lg btn-outline-primary" type="submit">Зарегистрироваться</button><br> <!-- Кнопка актиации скрипта -->
                            <div class="text-center ">
                                    <p>Нажимая кнопку "Зарегистрироваться", <br>
                                    вы соглашаетесь<br>
                                    с <a class="" href="inf/privacypolicy.php"> Условиями использования </a> <br> <!-- Ссылка на страницу с информацией -->
                                    и <a class="" href="inf/terms_use.php"> Политикой конфиденциальности </a></p> <!-- Ссылка на страницу с информацией -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container text-center  mt-1">
            <p>Уже зарегистрировались? <a class="" href="insert.php">Войти</a></p> <!-- Переход на страницу входа -->
        </div>

    </body>
</html>
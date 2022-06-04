<!doctype html>
<html lang="ru">
    <head>
    <meta charset="utf-8" />

    <title>Прием обращений</title><!--Название для сайта-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> <!--Иконка сайта -->
    <link rel="stylesheet" href="css/style.css"/> <!--Поключение к css -->
    <link rel="stylesheet" href="css/adaptive.css"/> <!--Поключение к css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/><!--Подключение Бутстрапа-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Подключение инструментов адаптивности-->
    </head>

    <body>

        <div class="container d-flex flex-wrap justify-content-center mt-5">
            <div class="row border rounded-top p-3 mb-5 bg-body rounded">
                <div class="col">
                       
                    <form action="checks/check2.php" method="post"> <!-- Форма отправки данных -->
                        <div class="col">
                            <h1 class="text-center mb-3">Вход</h1>
                            <img class=" rounded mx-auto d-block mb-3" src="img\gerb2.png" alt="" width="110" height="150">
                            <form action="auth.php" method="post">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваш имя"><br><!-- Ввод имени -->
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите ваш пароль"><br><!--Ввод пароля -->
                                <button class="w-100 btn btn-lg btn-outline-primary" type="submit">Авторизоваться</button><!-- Кнопка актиации скрипта -->
                                <div class=" text-center mt-1">
                                     <a class="" href="index.php">ввернуться к регистрации</a><!-- Переход на страницу регистрации -->
                                 </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>
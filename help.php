<!doctype html>
<html lang="ru">
    <head>
    <meta charset="utf-8" />

    <title>Прием обращений</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    </head>

    <body>
   
    <?php
        require "blocks/header.php"
    ?>

    <main>
        <div class="container d-flex justify-content-center mb-4">
            <div class="w-0">
            <img class="rounded mx-auto d-block" src="img\4.png" alt="" width="90%">
                <div class="container mt-5 mb-2 text-center mb-3">
                    <h3>Письмо в техническую поддержку</h3>
                </div>

                <div class="container mt-3 mb-4 text-center mb-3">
                    <p>Поддержка работает в режиме 24/7. <br>
                    Ответ придет на вашу почту от 10минут до 2 часов. </p>
                </div>

                <div class="text-danger mb-1 text-center text-wrap">
                    <?php
                    error_reporting(0);
                    echo htmlspecialchars($_COOKIE["Err4"]);
                    ?>
                </div>
                
                <form action="message/mess4.php" method="post" class="m-5">
                <?php
                    if (!empty($_COOKIE['Nam'])):   
                ?>  
                    <div class="fst-italic text-primary">Мы заботливо вписали за вас</div>
                    <input type="email" name="email" value="<?=$_COOKIE['Email']?>" class="form-control"><br>
                <?php else: ?>    
                    <input type="email" name="email" placeholder="Ваша почта" class="form-control"><br>
                <?php endif?> 
                    <textarea name="massege" class="form-control" placeholder="Опишите вашу проблему"></textarea><br>
                    <button type="submit" name="send" class="btn btn-lg btn-outline-primary card-link">Отправить</button>
                </form>
            </div>
        </div>
    </main>

    <?php
        require "blocks/footer.php"
    ?>

    </body>

</html>
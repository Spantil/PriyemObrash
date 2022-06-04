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
            <div class="w-0 ">
                <img class="rounded mx-auto d-block" src="img\2.1.png" alt="" width="90%">
                <div class="container mt-3 mb-4 text-center ">
                    <h3>Введите текст вашего обращения </h3>
                </div>
                
                <form action="message/mess2.php" method="post" class="m-5">
                    <div class="text-danger mb-3 text-center text-wrap">
                        <?php
                            error_reporting(0);
                            echo htmlspecialchars($_COOKIE["Err3"]);
                        ?>
                    </div>   
                    <?php
                        if (!empty($_COOKIE['Nam'])):   
                    ?>  
                        <div class="fst-italic text-primary">Мы заботливо вписали за вас</div>
                        <input type="email" name="email" value="<?=$_COOKIE['Email']?>" class="form-control"><br>
                    <?php else: ?>    
                        <input type="email" name="email" placeholder="Ваша почта" class="form-control"><br>
                    <?php endif?>

                        <input type="text" name="text" placeholder="К кому направлено обращение" class="form-control"><br>
                        <input type="text" name="text1" placeholder="Должность соответствующего должностного лица" class="form-control"><br>
                        <label for="file"> Прикрепление документа (В случай необходимости)</label>
                            <input type="file" name="file" class="form-control"><br>
                        <textarea name="massege" class="form-control" placeholder="Текст обращения"></textarea><br>
                        <div class="">
                            <a class="btn btn-light" href="info.php">Обратите внимание!</a>
                        </div> <br>
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
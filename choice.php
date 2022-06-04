<!doctype html>
<html lang="ru">
    <head>
    <meta charset="utf-8" />

    <title>Прием обращений</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/card.css"/>
    <link rel="stylesheet" href="css/adaptive.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    </head>

    <body>
    
    <?php
        require "blocks/header.php";
    ?>

    <main>

        <!-- -------------------PHP----------------- -->
            <?php
                if (!isset($_COOKIE['Nam'])): // Если куки не пустой то выполняется условие
            ?>
                <div name="UP" class="container mt-5 d-flex justify-content-center ">
                    <h3 class="mb-3"><p>Здраствуйте, <?=$_COOKIE['Nam2']?>!</p></h3>  <!-- Данные берутся из куки при регистрации -->
                </div>     

            <?php else: ?>
                    <div name="UP" class="container mt-5 d-flex justify-content-center ">
                        <h3 class="mb-3"><p>Здраствуйте <?=$_COOKIE['Nam']?>!</p></h3> <!-- Данные берутся из куки при входе -->
                    </div>      
            <?php endif?>
        <!-- -------------------PHP----------------- -->

    
        
        <div class="container d-flex justify-content-center ">
                <p>Выберете нужное вам обращение</p>
        </div>
        
        <div class="container d-flex flex-wrap mb-4">
            <div class="card mb-4 mt-4 rounded-3 ">
            <img src="img\1.jpg" class="card-img-top" alt="" width="100%" height="auto">
                <div class="card-body">
                        <p class="card-text pb-1">
                            Используйте данный шаблон если у вас есть рекомендации по улучшению деятености органа местного самоуправления.
                        </p>
                    <button type="button" onClick='location.href="appeal.php"' class="w-100 btn btn-lg btn-outline-primary">К оформлению</button>
                </div>
            </div>

            <div class=" card mb-4 mt-4 rounded-3 ">
            <img src="img\2.png" class="card-img-top" alt="" width="100%" height="auto">
                <div class="card-body">
                            <p class="card-text">
                                Используйте данный шаблон чтобы заявить о нарушении ваших прав, или об наруше прав других лиц.
                            </p>
                    <button type="button" onClick='location.href="appeal1.php"' class="w-100 btn btn-lg btn-outline-primary card-link">К оформлению</button>
                </div>
            </div>

            <div class="card mb-4 mt-4 rounded-3 ">
            <img src="img\3.png" class="card-img-top" alt="" width="100%" height="auto">
                <div class="card-body">
                            <p class="card-text">
                                Используйте данный шаблон если вам нужно содействие в реализации ваших конституционных прав и свобод.
                            </p>
                    <button type="button" onClick='location.href="appeal2.php"' class="w-100 btn btn-lg btn-outline-primary card-link">К оформлению</button>
                </div>
            </div>

            <div class="container d-flex flex-wrap">

            </div>
        </div>

    </main>

    <?php
        require "blocks/footer.php"
    ?>
    </body>

</html>
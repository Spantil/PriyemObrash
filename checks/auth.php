<?php
   if($_COOKIE['login'] == 'true')
        setcookie('login', 'true', time() - 3600, '/');
    else
   setcookie('login', 'true', time() + 3600, '/');
        header('Location: ../choice.php');
?>

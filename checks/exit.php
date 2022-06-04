<?php
    setcookie('Nam', '$name', time() - 3600, '/');
    setcookie('Nam2', '$name', time() - 3600, '/');
    header('Location: ../index.php');
?>
<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

    if (mb_strlen($login) < 3 || mb_strlen($login) > 30) {
        echo "Довжина логіна недопустима!";
        exit();
    }else if(mb_strlen($pass) < 3 || mb_strlen($pass) > 32){
        echo "Довжина пароля недопустима!";
        exit();
    }else if(mb_strlen($name) < 2 || mb_strlen($name) > 30){
        echo "Довжина імені недопустима!";
        exit();
    }

    $mysql = new mysqli('localhost', 'root', 'root', 'users_db');

    $pass = md5($pass."qwert");
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");
    header("Location: /");

    $mysql->close();
 ?>

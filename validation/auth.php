<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."qwert");

    $mysql = new mysqli('localhost', 'root', 'root', 'users_db');

//    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

    #переводимо обєкт  в масив
    $user = $result->fetch_assoc();
    if (count($user) == 0) {
        echo "Такий користувач не існує!";
        exit();
    }
    #--виводить масив
    // print_r($user);
    // exit();
    setcookie('user', $user['name'], time() + 3600, "/"); //четверт пар означає що кука діє на всіх сторінках наого сайту
        // echo "Щоб вийти натисніть a";
    header('Location: /');

    $mysql->close();

 ?>

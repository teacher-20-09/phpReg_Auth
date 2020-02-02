<?php
    setcookie('user', $user['name'], time() - 3600, "/"); //четверт параметр означає що кука діє на всіх сторінках наого сайту
    header("Location:/");
 ?>

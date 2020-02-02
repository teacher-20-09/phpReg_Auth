<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма реєстрції</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once("blocks/header.php");?>
    <div class="container contai mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>

        <div class="row">
            <div class="col">
                <h3>Реєстрція</h3>
                <form action="validation/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін!"><br>
                    <input type="password" class="form-control" name="pass" id="pass"placeholder="Введіть пароль!"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введіть імя!"><br>
                    <button class="btn btn-secondary" type="submit">Зареєструватись</button>
                </form>
            </div>
            <div class="col">
                <h3>Авторизація</h3>
                <form action="validation/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін!"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль!"><br>
                    <button class="btn btn-secondary" type="submit">Увійти</button>
                </form>
            </div>
            <div class="row">
                <div class="col">
                    <div class="intro-2">
                        <img src="https://mdbootstrap.com/img/Photos/Others/img (51).jpg" alt="Not found!">
                    </div>
                </div>
                <div class="col">
                    <div class="intro-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <p class="exit">Привіт <?=$_COOKIE['user']?><a href="validation/exit.php"><button class="btn_exit">Вийти</button></a></p>
                <div class="bs-example">
                    <div class="container">
                        <div class="row">
                            <div class="card-group">
                                <div class="card">
                                    <img src="https://imgtube.ru/images/stories/strany/evropa/swejzarija/foto/switzerland-3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="https://w-dog.ru/wallpapers/9/14/508050710635048.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Vestibulum id metus ac nisl bibendum nibh scelerisque non purus in suspendisse.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="https://plusiminusi.ru/wp-content/uploads/2017/07/pr888.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Pulvinar leo id risus enim. Bibendum varius tincidunt pellentesque malesuada in.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
                <div class="bs-example">
            <div class="container">
                <div class="row">
                    <div class="card-group">
                        <div class="card">
                            <img src="https://w-dog.ru/wallpapers/9/14/508050710635048.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://plusiminusi.ru/wp-content/uploads/2017/07/pr888.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Vestibulum id metus ac nisl bibendum nibh scelerisque non purus in suspendisse.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://imgtube.ru/images/stories/strany/evropa/swejzarija/foto/switzerland-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Pulvinar leo id risus enim. Bibendum varius tincidunt pellentesque malesuada in.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
        <div class="bs-example">
        <div class="container">
        <div class="row">
            <div class="card-group">
                <div class="card">
                    <img src="https://plusiminusi.ru/wp-content/uploads/2017/07/pr888.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="https://imgtube.ru/images/stories/strany/evropa/swejzarija/foto/switzerland-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Vestibulum id metus ac nisl bibendum nibh scelerisque non purus in suspendisse.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="https://w-dog.ru/wallpapers/9/14/508050710635048.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Pulvinar leo id risus enim. Bibendum varius tincidunt pellentesque malesuada in.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
            <?php endif;?>
        </div>
    </div>
    <?php
    require_once("blocks/footer.php");
     ?>
</body>
</html>

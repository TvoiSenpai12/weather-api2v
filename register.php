<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWTC? - Какая сейчас погода, сыр?</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="shortcut icon" href="assets/img/icon-weather.png" type="image/x-icon">
</head>

<body>

    <div class="video-bg">
        <video src="assets/css/weather-wrapper/weather.mp4" type="video/mp4" autoplay muted loop></video>
        <div class="effects"></div>
        <div class="video-bg__content">
            <header>
                <div class="logo">
                    <a href=""><img src="assets/img/logo_ru.png" alt=""></a>
                </div>
                <div class="reg-menu">
                    <h2>Вход/Регистрация</h2>
                    <img src="assets/img/user.svg" alt="">
                </div>
            </header>
            <main>
                <form class="form-log" action="vendor/signup.php" method="post" enctype="multipart/form-data">
                    <label>ФИО</label>
                    <input type="text" name="full_name" placeholder="Введите свое полное имя">
                    <label>Логин</label>
                    <input type="text" name="login" placeholder="Введите логин">
                    <label>Почта</label>
                    <input type="email" name="email" placeholder="Введите почту">
                    <label>Изображение профиля</label>
                    <input type="file" name="avatar">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль">
                    <label>Подтверждение пароля</label>
                    <input type="password" name="password_confirm" placeholder="Введите пароль ещё раз">
                    <button type="submit">Войти</button>
                    <p>
                        У вас уже есть аккаунта? - <a href="/">Авторизация</a>
                    </p>
    
                    <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                    }
                    unset($_SESSION['message'])
                    ?>
                </form>
                <div class="card-bg">
                    <h1>Погода в городе</h1>
                    <div class="weather-city">
                        <h2 value="625144">Войдите в аккаунт</h2>
                    </div>
                    <div class="degree">
                        <h2></h2>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="assets/script/main.js"></script>
</body>

</html>
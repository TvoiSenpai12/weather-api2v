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
                <div class="reg-menu" onclick="formClick()">
                    <h2>Вход/Регистрация</h2>
                    <img src="assets/img/user.svg" alt="">
                </div>
            </header>
            <main>
                <form class="form-log" action="vendor/signin.php" method="post">
                    <label>Логин</label>
                    <input type="text" name="login" placeholder="Введите логин">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль">
                    <button type="submit">Войти</button>
                    <p>
                        У вас нет аккаунта? - <a href="/register.php">Зарегистрироваться</a>
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
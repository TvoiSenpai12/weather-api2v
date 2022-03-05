<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: /');
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
                    <h2><?= $_SESSION['user']['full_name'] ?></h2>
                    <img src="<?= $_SESSION['user']['avatar'] ?>" alt="">
                </div>
                <a href="vendor/logout.php" class="logout">Выход</a>
                <div class="city-setting">
                    <h2>Выбрать город</h2>
                    <select class="city">
                        <option value="524894">Москва</option>
                        <option value="501175">Ростов-на-Дону</option>
                        <option value="625144">Минск</option>
                        <option value="703448">Киев</option>
                    </select>
                    <h2>Ваша почта</h2>
                    <a href="#" class="email"><?= $_SESSION['user']['email'] ?></a>
                    <h2>Будильник</h2>
                    <div class="alarm_clock">
                        <input id="alarmTime" type="datetime-local">
                        <button id="alarmButton" onclick="setAlarm(this);">Поставить</button>

                        <div id="alarmOptions" style="display: none;">
                            <button onclick="snooze();">Перенести на 5 минут</button>
                            <button onclick="stopAlarm();">Стоп</button>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <div class="card-bg">
                    <h2 class="name_hi">Привет <?= $_SESSION['user']['full_name'] ?>!</h2>
                    <h1>Погода в городе</h1>
                    <div class="weather-city">
                        <h2 value="625144">Минск</h2>
                    </div>
                    <div class="degree">
                        <h2></h2>
                    </div>
                    <div class="card-weather">
                        <!-- <img src="https://openweathermap.org/img/wn/01d@2x.png" alt="Icon Weather"> -->
                    </div>
                    <div class="human">
                        <h2>Скорость ветра</h2>
                        <h2 class="wind">-</h2>
                        <h2>Влажность</h2>
                        <h2 class="humidity">-</h2>
                        <h2>Давление</h2>
                        <h2 class="pressure">-</h2>
                        <!-- <h2>Советуем одеваться так</h2>
                        <img src="assets/img/cold.png" alt="Human" width="240px"> -->
                    </div>
                </div>
            </main>
            <!-- <div class="footer">
                <img src="" alt="">
            </div> -->
        </div>
    </div>

    <script src="assets/script/main.js"></script>
    <script src="assets/script/alarm_clock.js"></script>
    <script src="assets/script/wrapper.js"></script>
</body>

</html>
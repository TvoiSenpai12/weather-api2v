const param = {
    "url": "https://api.openweathermap.org/data/2.5/",
    "appid": "f405fa973c1339e48f29c3d3cfc8933e"
}


function getWeather() {
    const cityId = document.querySelector('.city').value;

    fetch(`${param.url}weather?id=${cityId}&units=metric&APPID=${param.appid}`)
        .then(weather => {
            return weather.json();
        }).then(showWeather);

}

function showWeather(data) {
    console.log(data);
    document.querySelector('.weather-city').textContent = data.name
    document.querySelector('.degree').innerHTML = Math.round(data.main.temp) + '&deg;'
    document.querySelector('.wind').innerHTML = data.wind.speed
    document.querySelector('.humidity').innerHTML = data.main.humidity
    document.querySelector('.pressure').innerHTML = data.main.pressure
    document.querySelector('.card-weather').innerHTML = '<img src="https://openweathermap.org/img/wn/' + data.weather[0]['icon'] + '@2x.png" width="120px">'

    let wrapper = document.querySelector(".card-weather img").src;
    let videoBg = document.querySelector(".video-bg video");
    if (wrapper == 'https://openweathermap.org/img/wn/01d@2x.png' || wrapper == 'https://openweathermap.org/img/wn/02d@2x.png' || wrapper == 'https://openweathermap.org/img/wn/01n@2x.png' || wrapper == 'https://openweathermap.org/img/wn/02n@2x.png') {
        videoBg.src = 'https://vk.com/doc205869177_600912471';
    } else if (wrapper == 'https://openweathermap.org/img/wn/03d@2x.png' || wrapper == 'https://openweathermap.org/img/wn/04d@2x.png' || wrapper == 'https://openweathermap.org/img/wn/03n@2x.png' || wrapper == 'https://openweathermap.org/img/wn/04n@2x.png') {
        videoBg.src = 'https://vk.com/doc205869177_600912468';
    } else if (wrapper == 'https://openweathermap.org/img/wn/09d@2x.png' || wrapper == 'https://openweathermap.org/img/wn/10d@2x.png' || wrapper === 'https://openweathermap.org/img/wn/11d@2x.png' || wrapper == 'https://openweathermap.org/img/wn/09n@2x.png' || wrapper == 'https://openweathermap.org/img/wn/10n@2x.png' || wrapper == 'https://openweathermap.org/img/wn/11n@2x.png') {
        videoBg.src = 'https://vk.com/doc205869177_600912469';
    } else if (wrapper == 'https://openweathermap.org/img/wn/13d@2x.png' || wrapper == 'https://openweathermap.org/img/wn/13n@2x.png') {
        videoBg.src = 'https://vk.com/doc205869177_600912455';
    } else if (wrapper == 'https://openweathermap.org/img/wn/50d@2x.png' || wrapper == 'https://openweathermap.org/img/wn/50n@2x.png') {
        videoBg.src = 'https://vk.com/doc205869177_600912689';
    }
}


document.querySelector('.reg-menu').onclick = () => {
    document.querySelector('.form-log').classList.toggle('form-switch')

}

getWeather();
document.querySelector('.city').onchange = getWeather;

// document.querySelector('.reg-menu').onclick = () => {
// }

// ПОЯВЛЕНИЕ МЕНЮ РЕГА
// function cityClick() {
// }


// // ПОЯВЛЕНИЕ МЕНЮ ПРОФИЛЯ
// function formClick() {
//     document.querySelector('.city-setting').classList.toggle('form-switch')
// }




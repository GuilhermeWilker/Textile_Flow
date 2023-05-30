const hr = document.querySelector(".hr");
const min = document.querySelector(".min");
const seg = document.querySelector(".seg");

const getRealTimeOfTheDay = setInterval(() => {
    let hour = new Date().getHours();
    let minutes = new Date().getMinutes();
    let seconds = new Date().getSeconds();

    if (hour < 10) hour = "0" + hour;
    if (minutes < 10) minutes = "0" + minutes;
    if (seconds < 10) seconds = "0" + seconds;

    hr.textContent = hour;
    min.textContent = minutes;
    seg.textContent = seconds;
}, 1);

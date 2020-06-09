/*
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
*/

/* PROGRES*/
let button = document.getElementById('button');
let progress = document.getElementById('progress');

if(button != null || button != undefined){
    button.addEventListener('click', () => {
        console.log("progress",progress.style.width.split('%'))
        let step = 18
        let currentWidth = parseFloat(progress.style.width.split('%')[0])
        if(currentWidth < 100) {
            if(currentWidth + step >= 100) {
                progress.style.width = `100%`
            } else {
                progress.style.width = `${currentWidth + step}%`
            }
        }
    }) 
}

/* REDIRECT BUTON*/
/*
function redirectExplicatie(path) {
  window.navigate("path");
}
*/

/* POPUP*/
/*showPopup = document.getElementById('show-popup')
        popup = document.getElementById('popup')
        popupClose = document.getElementById("popup-close")
        showPopup.addEventListener('click', () => {
            popup.style.visibility = 'visible'
        })
        popupClose.addEventListener('click', () => {
            popup.style.visibility = 'hidden'
        })
*/
function redirectToPage(path){
    window.location.replace(path);
}
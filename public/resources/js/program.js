
let countDownDate = new Date("April 18, 2019 17:30:0").getTime();





let timeout = 1000;

let distance;

let x = setInterval(() => {
    let now = new Date().getTime();

    distance = countDownDate - now;

    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))


    document.querySelector(".time__txt--days").innerHTML = days.twoDigits();
    document.querySelector(".time__txt--hours").innerHTML = hours.twoDigits();
    document.querySelector(".time__txt--minutes").innerHTML = minutes.twoDigits();
    document.querySelector(".time__txt--seconds").innerHTML = seconds.twoDigits();

}, timeout);

if (distance < 0) {
    clearInterval(x);
    document.querySelector(".time__txt--days").innerHTML = 0;
    document.querySelector(".time__txt--hours").innerHTML = 0;
    document.querySelector(".time__txt--minutes").innerHTML = 0;
    document.querySelector(".time__txt--seconds").innerHTML = 0;

}


Number.prototype.twoDigits = function () {
    let n = this;
    return (n.toString().length == 2) ? n : "0" + n;
}
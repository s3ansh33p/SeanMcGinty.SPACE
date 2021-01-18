var endid = document.getElementById("end");
endid.style.display = "none";

//Init
// var countDownDate = new Date("Jan 27, 2021 19:00:00").getTime();
var now = new Date().getTime();
var distance = countDownDate - now;
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
+ minutes + "m " + seconds + "s ";
if (distance < 0) {
  clearInterval(countdownfunction);
  document.getElementById("countdown").innerHTML = "COMPLETED";
  //document.getElementById("countdown").style.display = "none";
  endid.style.display = "block";
}

var countdownfunction = setInterval(function() {
var now = new Date().getTime();
var distance = countDownDate - now;
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
+ minutes + "m " + seconds + "s ";
if (distance < 0) {
  clearInterval(countdownfunction);
  document.getElementById("countdown").innerHTML = "COMPLETED";
  //document.getElementById("countdown").style.display = "none";
  endid.style.display = "block";
}
}, 1000);
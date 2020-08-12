"use strict";
// code from https://www.w3schools.com/howto/howto_js_countdown.asp to display a timer
var future = new Date(new Date().getTime() + 5 * 60000).getTime();

var x = setInterval(function() {
  var now = new Date().getTime();

  var distance = future - now;

  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("time").innerHTML = minutes + "m " + seconds + "s ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "TIME EXPIRED, returning to home page";
    setTimeout(location.replace("index.html"), 5000);
  }
}, 1000);

// Function to fill card holder name in form input
function putName(){
  var name = document.getElementById("name");
  name.value = sessionStorage.getItem('first-name') + " " + sessionStorage.getItem('last-name');
}

window.onload = putName;

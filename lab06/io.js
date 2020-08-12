/*
Author: Sergio Omar Alvarado Perez
Target: clickme.html
Purpose: Dynamic User Interaction using JavaScript
Created: 04/21/2020
Last updated: 04/21/2020
Credits: Lab06 guide
*/
"use strict"; //prevents creation of global variables in functions

// ask for user name
function promptName(){
  var sName = prompt("Enter your name.\nThis prompt should up when the\nClick me button is clicked.", "Your name");
  alert("Hi there " + sName + ". Alert boxes are a quick way to check the state\n of your variables when you are developing code.");
  rewriteParagraph(sName);
}
// change paragraph 1 html
function rewriteParagraph(userName){
  var message = document.getElementById("message");
  message.innerHTML = "Hi " + userName + ". If you can see this, you have successfully overwritten the contents of this paragraph. Congratulations!!";
}
// change paragraph 2 text
function writeNewMessage(){
  var message = document.getElementById("finish");
  message.textContent = "You have now finished Task 1";
}

// this function is called when the browser window loads
// it will register functions that will respond to browser prevents
function init(){
  var clickMe = document.getElementById("clickme");
  clickMe.onclick = promptName;
  var h1 = document.getElementsByTagName("h1")[0];
  h1.onclick = writeNewMessage;
}

window.onload = init;

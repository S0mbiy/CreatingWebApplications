"use strict";

function button2(){
  document.getElementById("phoneImg").src = "img/phone1.png";
  document.getElementById("phoneName").textContent = "P600";
  document.getElementById("phoneFact").textContent = "The new P600 has a chipset that will change your experience of speed. The powerful triple Camera with cutting edge AI capability will upgrade the way of capturing moments, get to know the power of technology.";
  var html = "<table class='center'>" +
    "<caption><h3>Models</h3></caption>" +
    "<tr>" +
      "<th></th>" +
      "<th>P600</th>" +
      "<th>P600 Lite</th>" +
    "</tr>" +
    "<tr>" +
      "<th>Display</th>" +
      "<td>6.1- inch FHD OLED</td>" +
      "<td>6.4inch LCD</td>" +
    "</tr>" +
    "<tr>" +
      "<th>Camera</th>" +
      "<td>50 MP, 16 MP, 8 MP</td>" +
      "<td>48 MP, 8 MP, 2 MP, 2 MP</td>" +
    "</tr>" +
    "<tr>" +
      "<th>Battery</th>" +
      "<td>4.200 mAh</td>" +
      "<td>3800mAh</td>" +
    "</tr>" +
    "<tr>" +
      "<th>Colors available</th>" +
      "<td>Deep Sea Blue, Ice White, Black</td>" +
      "<td>Green, Pink, Black</td>" +
    "</tr>" +
  "</table>";
  document.getElementById("phoneModels").innerHTML = html;
}
function button1(){
  document.getElementById("phoneImg").src = "img/phone3.png";
  document.getElementById("phoneName").textContent = "R315";
  document.getElementById("phoneFact").textContent = "This phone has an elegant dynamic display that is made of revolutionary polymer material, which is layered for slim flexibility!";
  var html = "<table class='center'>" +
    "<caption><h3>Models</h3></caption>" +
    "<tr>" +
      "<th></th>" +
      "<th>R315</th>" +
      "<th>R315 Pro</th>" +
    "</tr>" +
    "<tr>" +
      "<th>Display</th>" +
      "<td>6.7 AMOLED Display</td>" +
      "<td>7.3 QXGA+ Dynamic AMOLED</td>" +
    "</tr>" +
    "<tr>" +
      "<th>Camera</th>" +
      "<td>12 MP, 12 MP </td>" +
      "<td>16 MP,12 MP,12 MP</td>" +
    "</tr>" +
    "<tr>" +
      "<th>Battery</th>" +
      "<td>3300mAh</td>" +
      "<td>4380mAh</td>" +
    "</tr>" +
    "<tr>" +
      "<th>Colors available</th>" +
      "<td>Black, Purple, Gold</td>" +
      "<td>Space Silver, Cosmos Black</td>" +
    "</tr>" +
  "</table>";
  document.getElementById("phoneModels").innerHTML = html;
}
function button3(){
  document.getElementById("phoneImg").src = "img/phone4.png";
  document.getElementById("phoneName").textContent = "I30";
  document.getElementById("phoneFact").textContent = "The I30 boasts a stunning fluid amoled display that will let you experience more immersive entertainment, anytime, anywhere. Videos are more captivating and everyday tasks become better in a spacious screen.";
  var html = "<table class='center'>" +
    "<caption><h3>Models</h3></caption>" +
    "<tr>" +
      "<th></th>" +
      "<th>I30</th>" +
      "<th>I30 Pro</th>" +
    "</tr>" +
    "<tr>" +
      "<th>Display</th>" +
      "<td>6.55-inch 90Hz Fluid AMOLED</td>" +
      "<td>6.67-inch 90Hz Fluid AMOLED</td>" +
    "</tr>" +
    "<tr>" +
      "<th>Camera</th>" +
      "<td>48 MP, 12 MP, 16 MP </td>" +
      "<td>48 MP, 8 MP, 16 MP</td>" +
    "</tr>" +
    "<tr>" +
      "<th>Battery</th>" +
      "<td>3300mAh</td>" +
      "<td>4380mAh</td>" +
    "</tr>" +
    "<tr>" +
      "<th>Colors available</th>" +
      "<td>Blue, Black</td>" +
      "<td>Blue, Black, Red</td>" +
    "</tr>" +
  "</table>";
  document.getElementById("phoneModels").innerHTML = html;
}

function init(){
  document.getElementById("button1").onclick = button1;
  document.getElementById("button2").onclick = button2;
  document.getElementById("button3").onclick = button3;
}

window.onload=init;

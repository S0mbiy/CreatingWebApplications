"use strict";

function validate(){
  var errMsg = "";
  var result = true;

  var state = document.getElementById("state").value;
  var zip = document.getElementById("zip").value.slice(0, 1);

  switch(zip){
    case "3":
    case "8":
      if(state!="VIC"){
        result = false;
        errMsg+="ZIP code doesn't match with state\n";
      }
      break;
    case "1":
    case "2":
      if(state!="NSW"){
        result = false;
        errMsg+="ZIP code doesn't match with state\n";
      }
      break;
    case "4":
    case "9":
      if(state!="QLD"){
        result = false;
        errMsg+="ZIP code doesn't match with state\n";
      }
      break;
    case "0":
      if(state!="NT" && state!="ACT"){
        result = false;
        errMsg+="ZIP code doesn't match with state\n";
      }
      break;
    case "6":
      if(state!="WA"){
        result = false;
        errMsg+="ZIP code doesn't match with state\n";
      }
      break;
    case "5":
      if(state!="SA"){
        result = false;
        errMsg+="ZIP code doesn't match with state\n";
      }
      break;
    case "7":
      if(state!="TAS"){
        result = false;
        errMsg+="ZIP code doesn't match with state\n";
      }
      break;
    default:
      result = false;
      errMsg+="ZIP code doesn't exist\n";
      break;

  }

  var total = document.getElementById("total")
  var product = document.getElementById("product").value;
  switch(product){
    case "R315":
      total.innerHTML = "200";
      break;
    case "P600":
      total.innerHTML = "600";
      break;
    case "I30":
      total.innerHTML = "150";
      break;
    default:
      result = false;
      total.innerHTML = "0";
      errMsg+="A product must be selected before continuing\n";
      break;
  }

  var cas = document.getElementById("case").checked;
  if(cas){
    var val = parseInt(total.innerHTML);
    total.innerHTML = val + 20;
  }
  var pro = document.getElementById("pro").checked;
  if(pro){
    var val = parseInt(total.innerHTML);
    total.innerHTML = val + 50;
  }
  var battery = document.getElementById("battery").checked;
  if(battery){
    var val = parseInt(total.innerHTML);
    total.innerHTML = val + 50;
  }

  var amount = document.getElementById("amount").value;
  if(isNaN(amount)){
    result = false;
    errMsg+="Amount can only be a number greater than 0\n";
  }
  else if (parseInt(amount) < 1) {
    result = false;
    errMsg+="Amount can only be a number greater than 0\n";
  }
  else {
    var val = parseInt(total.innerHTML);
    total.innerHTML = val*parseInt(amount);
  }

  if (!result) {
    alert(errMsg);
  }else {
    sessionStorage.setItem('total', parseInt(total.innerHTML));
    var firstname = document.getElementById("first-name").value;
    sessionStorage.setItem('first-name', firstname);
    var lastname = document.getElementById("last-name").value;
    sessionStorage.setItem('last-name', lastname);
    var email = document.getElementById("email").value;
    sessionStorage.setItem('email', email);
    var street = document.getElementById("street").value;
    sessionStorage.setItem('street', street);
    var suburb = document.getElementById("suburb").value;
    sessionStorage.setItem('suburb', suburb);
    var state = document.getElementById("state").value;
    sessionStorage.setItem('state', state);
    var zip = document.getElementById("zip").value;
    sessionStorage.setItem('zip', zip);
    var phone = document.getElementById("phone").value;
    sessionStorage.setItem('phone', phone);
    var contact = "";
    if (document.getElementById("cemail").checked)
      contact="Email";
    if (document.getElementById("post").checked)
      contact="Post";
    if (document.getElementById("cphone").checked)
      contact="Phone";
    sessionStorage.setItem('contact', contact);
    var product = document.getElementById("product").value;
    sessionStorage.setItem('product', product);
    var amount = document.getElementById("amount").value;
    sessionStorage.setItem('amount', amount);
    var features = [];
    if (document.getElementById("case").checked)
      features.push(" Case");
    if (document.getElementById("pro").checked)
      features.push(" Pro Variant");
    if (document.getElementById("battery").checked)
      features.push(" Larger Battery");
    sessionStorage.setItem('features', features.toString());
    var comment = document.getElementById("comment").value;
    sessionStorage.setItem('comment', comment);
  }

  return result;
}

function init(){
  var form = document.getElementById("form");
  form.onsubmit = validate;
}

window.onload=init;

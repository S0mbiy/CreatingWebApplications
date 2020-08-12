"use strict";

function validate(){
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

function init(){
  var form = document.getElementById("form");
  form.onsubmit = validate;
}

window.onload=init;

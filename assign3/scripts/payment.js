//Pyament.php behavior code
"use strict";
// Credit card form validation
function validate(){
  var errMsg = "";
  var result = true;

  var type = document.getElementById("type").value;
  var card = document.getElementById("card").value;

  switch (type) {
    case "visa":
      if(card.slice(0,1)!="4" || card.length!=16){
        errMsg += "Card number is not valid.\n";
        result = false;
      }
      break;
    case "master card":
      var arr = ["51", "52", "53", "54", "55"];
      if(arr.indexOf(card.slice(0,2))==-1 || card.length!=16){
        errMsg += "Card number is not valid.\n";
        result = false;
      }
      break;
    case "american express":
      var arr = ["34","37"];
      if(arr.indexOf(card.slice(0,2))==-1 || card.length!=15){
        errMsg += "Card number is not valid.\n";
        result = false;
      }
      break;
    default:
      errMsg += "This card is not valid, try another one.\n";
      result = false;
      break;
  }

  if (!result) {
    alert(errMsg);
  }

  return result;
}

// load al session stored data
function loadData(){
  var total = document.getElementById("total");
  total.innerHTML = sessionStorage.getItem('total');
  var firstname = document.getElementById("first-name");
  firstname.value = sessionStorage.getItem('first-name');
  var lastname = document.getElementById("last-name");
  lastname.value = sessionStorage.getItem('last-name');
  var email = document.getElementById("email");
  email.value = sessionStorage.getItem('email');
  var street = document.getElementById("street");
  street.value = sessionStorage.getItem('street');
  var suburb = document.getElementById("suburb");
  suburb.value = sessionStorage.getItem('suburb');
  var state = document.getElementById("state");
  state.value = sessionStorage.getItem('state');
  var zip = document.getElementById("zip");
  zip.value = sessionStorage.getItem('zip');
  var phone = document.getElementById("phone");
  phone.value = sessionStorage.getItem('phone');
  var cemail = document.getElementById("cemail");
  if("Email" == sessionStorage.getItem('contact'))
    cemail.checked = true;
  var post = document.getElementById("post");
  if("Post" == sessionStorage.getItem('contact'))
    post.checked = true;
  var cphone = document.getElementById("cphone");
  if("Phone" == sessionStorage.getItem('contact'))
    cphone.checked = true;
  var product = document.getElementById("product");
  product.value = sessionStorage.getItem('product');
  var amount = document.getElementById("amount");
  amount.value = sessionStorage.getItem('amount');
  var cas = document.getElementById("case");
  if(sessionStorage.getItem('features').search("Case")!=-1)
    cas.checked = true;
  var pro = document.getElementById("pro");
  if(sessionStorage.getItem('features').search("Pro Variant")!=-1)
    pro.checked = true;
  var battery = document.getElementById("battery");
  if(sessionStorage.getItem('features').search("Larger Battery")!=-1)
    battery.checked = true;
  var comment = document.getElementById("comment");
  comment.value = sessionStorage.getItem('comment');
}

// cancel button errase session data and redirects to home page
function cancel(){
  sessionStorage.clear();
  location.replace("index.php");
}

function init(){
  loadData();
  
  var cancelbtn = document.getElementById("cancelbutton");
  cancelbtn.onclick = cancel;
}

window.onload=init;

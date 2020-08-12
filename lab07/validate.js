"use strict";

function getSpecies(){
  var specieName="unknown";
  var speciesArray=document.getElementById("species").getElementsByTagName("input");
  for (var i=0; i<speciesArray.length; i++){
    if(speciesArray[i].checked){
      specieName = speciesArray[i].value;
      break;
    }
  }
  return specieName;
}

function checkSpeciesAge(age){
  var errMsg = "";
  var specie = getSpecies();
  switch(specie){
    case "Human":
      if (age>120){
        errMsg = "You can't be a human and over 120.\n";
      }
      break;
    case "Dwarf":
    case "Hobbit":
      if(age > 150){
        errMsg = "You can not be a " + specie + " and over 150.\n";
      }
      break;
    case "Elf":
      break;
    default:
      errMsg = "Your specie cant travel with us.\n";
      break;
  }
  return errMsg;
}

function checkSpeciesBeard(beard, age){
  var errMsg = "";
  var specie = getSpecies();
  switch(specie){
    case "Human":
      break;
    case "Dwarf":
      if(age>30&&beard<12){
        errMsg = "Dwarfs over 30 years old always have a beard longer than 12 inches.\n";
      }
      break;
    case "Hobbit":
    case "Elf":
      if(beard > 0){
        errMsg = "You can not be a/an " + specie + " and have a beard.\n";
      }
      break;
    default:
      errMsg = "Your specie cant travel with us.\n";
      break;
  }
  return errMsg;
}

function validate(){
  var errMsg="";
  var result = true;

  var firstname = document.getElementById("firstname").value;
  if(!firstname.match(/^[a-zA-Z]+$/)){
    errMsg = errMsg + "Your first name must only contain alpha characters\n";
    result = false;
  }

  var lastname = document.getElementById("lastname").value;
  if(!lastname.match(/^[a-zA-Z\-]+$/)){
    errMsg = errMsg + "Your last name must only contain alpha characters or hyphen\n";
    result = false;
  }

  var age = document.getElementById("age").value;
  if(isNaN(age)){
    errMsg = errMsg + "Your age must be a number\n";
    result = false;
  }
  else if (age < 18) {
    errMsg = errMsg + "Your age must be greater than 17\n";
    result = false;
  }
  else if (age > 10000) {
    errMsg = errMsg + "Your age must be lesser than 10,001\n";
    result = false;
  }
  else {
    var tmpMsg = checkSpeciesAge(age);
    if(tmpMsg!=""){
      errMsg+=tmpMsg;
      result = false;
    }
  }

  var beard = document.getElementById("beard").value;
  var tmpMsg = checkSpeciesBeard(beard, age);
  if(tmpMsg!=""){
    errMsg+=tmpMsg;
    result = false;
  }

  var partySize = document.getElementById("partySize").value;
  if(isNaN(partySize)){
    errMsg = errMsg + "Number of travellers must be a number\n";
    result = false;
  }
  else if (partySize < 1) {
    errMsg = errMsg + "Number of travellers must be greater than 0\n";
    result = false;
  }
  else if (partySize > 100) {
    errMsg = errMsg + "Number of travellers must be lesser than 101\n";
    result = false;
  }

  if(document.getElementById("food").value=="none"){
    errMsg = errMsg + "You must select a food preference\n";
    result = false;
  }

  var is1day = document.getElementById("1day").checked;
  var is4day = document.getElementById("4day").checked;
  var is10day = document.getElementById("10day").checked;
  if(!(is1day||is4day||is10day)){
    errMsg += "Please select at least one trip.\n";
    result = false;
  }

  var human = document.getElementById("human").checked;
  var dwarf = document.getElementById("dwarf").checked;
  var elf = document.getElementById("elf").checked;
  var hobbit = document.getElementById("hobbit").checked;
  if(!(human||dwarf||elf||hobbit)){
    errMsg += "Please select one specie.\n";
  }

  if (errMsg!=""){
    alert(errMsg);
  }
  return result;
}
function init(){
  var regForm = document.getElementById("regform");//get refto the HTMLelement
  regForm.onsubmit = validate;//register the event listene
}

window.onload=init;

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking Confirmation</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Rohirrim Booking Form" />
	<meta name="keywords"    content="booking" />
  <meta name="author" content="Sergio Alvarado">
</head>
<body>
  <?php
  function sanitise_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <h1>Rohirrim Tour Booking Confirmation</h1>
  <?php
    $errMsg = "";
    if (isset($_POST["firstname"])){
      $firstname = sanitise_input($_POST["firstname"]);
    }
    else {
      header ("location: register.html");
    }
    if (isset ($_POST["lastname"]))
      $lastname = sanitise_input($_POST["lastname"]);
    if (isset ($_POST["age"]))
      $age = sanitise_input($_POST["age"]);
    if (isset ($_POST["food"]))
      $food = sanitise_input($_POST["food"]);
    if (isset ($_POST["partySize"]))
      $partySize = sanitise_input($_POST["partySize"]);
    if (isset ($_POST["species"]))
      $species = sanitise_input($_POST["species"]);
    else
      $species = "Unknown species";
    $tour = array();
    if(isset($_POST["1day"]))
      $tour[] = "One-day tour ";
    if(isset($_POST["4day"]))
      $tour[] = "Four-day tour ";
    if(isset($_POST["10day"]))
      $tour[] = "Ten-day tour ";
    $tourStr = "";
    for($i = 0; $i<count($tour); $i++){
      if(count($tour)-$i==2){
        $tourStr .= ($tour[$i] . " and ");
      }else if (count($tour)-$i==1) {
        $tourStr .= $tour[$i];
      }else{
        $tourStr .= ($tour[$i] . ", ");
      }
    }
    if($food=="none")
      $errMsg .= "<p>Error: Select a food option in the <a href=\"register.html\">form</a>.</p>";
    if ($firstname == "")
      $errMsg .= "<p>You must eneter your first name.</p>";
    else if(!preg_match("/^[a-zA-Z]*$/", $firstname)){
      $errMsg .= "<p>Only aplha letters allowed in your first name.</p>";
    }
    if ($lastname == "")
      $errMsg .= "<p>You must eneter your last name.</p>";
    else if(!preg_match("/^[a-zA-Z-]*$/", $lastname)){
      $errMsg .= "<p>Only aplha letters allowed in your last name.</p>";
    }
    if(!is_numeric($age)){
        $errMsg .= "<p>Age must be a number.</p>";
    }
    else if($age < 18 || $age > 10000){
      $errMsg .= "<p>Age must be not less than 18 or more than 10,000.</p>";
    }
    if ($errMsg != ""){
      echo "<p>$errMsg</p>";
    }
    else{
      echo "<p>Welcome $firstname $lastname! <br>
      You are now booked on the $tourStr. <br>
      Species: $species <br>
      Age: $age <br>
      Meal Preference: $food <br>
      Number of travellers: $partySize</p>";
    }
  ?>
</body>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="php introduction lab" />
  <meta name="keywords" content="php, server" />
  <meta name="author" content="Sergio Alvarado"  />
  <title>Lab 8</title>
</head>
<body>
  <?php
    include ("mathfunctions.php");
  ?>
  <h1>Creating Web Appplications - Lab 8</h1>
  <?php
    $num = 5;
    if (isPositiveInteger($num)){
      echo "<p>", $num, "! is ", factorial($num), ".</p>";
    }else {
      echo "<p> Please enter a positive integer.</p>";
    }
    echo "<p><a href='factorial.html'>Return to the Entry Page</a></p>";
  ?>
</body>

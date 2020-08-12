<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search records results</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Creating web application Lab 10" />
	<meta name="keywords"    content="PHP, MySQL" />
  <meta name="author" content="Sergio Alvarado">
</head>
<body>
  <h1>Search Results</h1>
  <?php
    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if(!$conn){
      echo("<p>Database connection failure.</p>");
    }
    else{
      $sql_table = "cars";

      $make = htmlspecialchars(trim($_POST["carmake"]));
      $model = htmlspecialchars(trim($_POST["carmodel"]));
      $price = htmlspecialchars(trim($_POST["price"]));
      $yom = htmlspecialchars(trim($_POST["yom"]));

      $query = "select make, model, price, yom FROM cars WHERE make like '%$make%' AND model like '%$model%' AND price like '%$price%' AND yom like '%$yom%'";

      $result = mysqli_query($conn, $query);

      if(!$result){
        echo "<p>Something is wrong with ", $query, "</p>";
      }else{
        if(mysqli_num_rows($result)==0){
          echo "<p>There are no results with maker:", $make, ", model:", $model, ", price:", $price, ", year of make:", $yom, ".</p>";
        }else {
          echo "<table border=\"1\">\n";
          echo "<tr>\n"
              . "<th scope=\"col\">Make</th>\n"
              . "<th scope=\"col\">Model</th>\n"
              . "<th scope=\"col\">Price</th>\n"
              . "<th scope=\"col\">YOM</th>\n"
              . "</tr>\n";
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>\n";
            echo "<td>", $row["make"], "</td>\n";
            echo "<td>", $row["model"], "</td>\n";
            echo "<td>", $row["price"], "</td>\n";
            echo "<td>", $row["yom"], "</td>\n";
            echo "</tr>\n";
          }
          echo "</table>\n";
          mysqli_free_result($result);
        }

      }
      mysqli_close($conn);
    }
  ?>
</body>
</html>

<!-- enhancements page of cellphone manufacturer company -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Get to know the best mobile phone in the market" />
  <meta name="keywords" content="cellphone, buy, cheap, awesome" />
  <meta name="author" content="Sergio Alvarado"  />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>RANDOM Enhancements</title>
  <link rel="stylesheet" href="styles/style.css" media="(min-width:701px)">
  <link href="styles/mobile_device.css" rel="stylesheet" media="(max-width:700px)">
  <link rel="stylesheet" href="styles/webfontkit/stylesheet.css">
</head>
<body id="home">
  <?php include "header.inc"; ?>
  <?php include "menu.inc"; ?>

  <article class="fullpage">
    <br>
    <h1>Enhancements 2:</h1>
    <ul>
      <li>
        On payment.php, I implemented a timer so that the user only has a limited
        time to complete the payment after which a warning is displayed / then
        the browser redirects to the home page.<br><br>
        Implementation:<br>
        Code recovered from: <a href="https://www.w3schools.com/howto/howto_js_countdown.asp">w3schools.com</a><br>
        var future = new Date(new Date().getTime() + 5 * 60000).getTime();<br>
        var x = setInterval(function() {<br>
          var now = new Date().getTime();<br>
          var distance = future - now;<br>
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));<br>
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);<br>
          document.getElementById("time").innerHTML = minutes + "m " + seconds + "s ";<br>
          if (distance &lt; 0) {<br>
            clearInterval(x);<br>
            document.getElementById("time").innerHTML = "TIME EXPIRED, returning to home page";<br>
            setTimeout(location.replace("index.php"), 5000);<br>
          }<br>
        }, 1000);
<br><br>
        This can be best seen in <a href="payment.php">payment page</a> at the bottom. <br><br><hr>
      </li>
      <li>
        On payment.php, I pre-loaded the Name on Credit Card as a concatenation
        of the firstname and lastname, into the input field, but still enable
        the user to change the value.<br><br>
        Implementation:<br>
        function putName(){<br>
          var name = document.getElementById("name");<br>
          name.value = sessionStorage.getItem('first-name') + " " + sessionStorage.getItem('last-name');<br>
        }<br>
        This can be seen in <a href="enquire.php">payment page after filling the enquire page</a>.<br>
      </li>
    </ul>
  </article>
  <?php include "footer.inc"; ?>

</body>
</html>

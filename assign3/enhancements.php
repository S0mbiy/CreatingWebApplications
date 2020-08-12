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
    <h1>Enhancements:</h1>
    <ul>
      <li>
        Responsive  Design  with  additional  CSS  that  presents  your
        website  specifically  for mobile phone/tablet sized displays.
        This goes beyond having a simple reponsive design since some elements
        in a web page can't adapt very well to smartphones small displays
        which are used maybe even more than laptops nowdays, thats why the
        styling for such devices must be done with a separate stylesheet
        so small devices can have a proper user experience and since the
        assignment didn't requested it, implementing it seemed as a must with
        todays industry standards.<br><br>
        Implementation:<br>
        Just by adding the following meta tag and the media atribute to each
        stylesheet the page used the apropiate style acording to the window size.<br>
        meta name="viewport" content="width=device-width, initial-scale=1"/<br>
        link rel="stylesheet" href="styles/style.css" media="(min-width:701px)"<br>
        link href="styles/mobile_device.css" rel="stylesheet" media="(max-width:700px)"<br><br>
        This can be best seen <a href="product.php">in here</a> specially on the aside section.<br><br><hr>
      </li>
      <li>
        Pseudo-elements to give feedback in form completion. This improves the
        course content by improving in a simple way the responsiveness to user
        interaction with the page, since it can be anoying when forms tells you
         you are wrong only until you have clicked submit and have to find where
          the mistake is.<br><br>
          Implementation:<br>
          By adding the next statements on your css stylesheet your users can receive instant
          feedback on what they type in the forms fields.<br>
          input:valid{background-color: #AFA;}<br>
          input:invalid{background-color: #FAA;}<br><br>
          This can be seen <a href="enquire.php">in here</a>.
      </li>
    </ul>
  </article>
  <?php include "footer.inc"; ?>

</body>
</html>

<!-- about page with information of developer -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Get to know the best mobile phone in the market" />
  <meta name="keywords" content="cellphone, buy, cheap, awesome" />
  <meta name="author" content="Sergio Alvarado"  />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>RANDOM About</title>
  <link rel="stylesheet" href="styles/style.css" media="(min-width:701px)">
  <link href="styles/mobile_device.css" rel="stylesheet" media="(max-width:700px)">
  <link rel="stylesheet" href="styles/webfontkit/stylesheet.css">
</head>
<body id="home">
  <?php include "header.inc"; ?>
  <?php include "menu.inc"; ?>

  <article class="fullpage">
    <br>
    <h2>Personal Details:</h2>
    <dl>
      <dt>Name</dt>
      <dd>Sergio Omar Alvarado Perez</dd>
      <dt>Student ID</dt>
      <dd>s102868394</dd>
      <dt>Course</dt>
      <dd>Computer Science</dd>
      <dt>Email</dt>
      <dd><a href="mailto:alvaradoomar55@hotmail.com">alvaradoomar55@hotmail.com</a></dd>
    </dl>
    <figure>
      <img src="img/sergio.png" alt="Sergio Alvarado">
    </figure>
    <table>
      <caption class="bold">Timetable</caption>
      <tr>
        <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
      </tr>
      <tr>
        <th>8:30-10:30</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>INF30029</td>
      </tr>
      <tr>
        <th>10:30-12:30</th>
        <td></td>
        <td>COS10011</td>
        <td></td>
        <td></td>
        <td>INF30029</td>
      </tr>
      <tr>
        <th>12:30-2:30</th>
        <td>TNE30009</td>
        <td>TNE30009</td>
        <td></td>
        <td>TNE30009</td>
        <td>SWE30003</td>
      </tr>
      <tr>
        <th>2:30-4:30</th>
        <td>COS10011</td>
        <td>TNE30009</td>
        <td></td>
        <td></td>
        <td>SWE30003</td>
      </tr>
    </table>
  </article>
  <?php include "footer.inc"; ?>

</body>
</html>

<!-- payment page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Get to know the best mobile phone in the market" />
  <meta name="keywords" content="cellphone, buy, cheap, awesome" />
  <meta name="author" content="Sergio Alvarado"  />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>RANDOM Payment</title>
  <link rel="stylesheet" href="styles/style.css" media="(min-width:701px)">
  <link href="styles/mobile_device.css" rel="stylesheet" media="(max-width:700px)">
  <link rel="stylesheet" href="styles/webfontkit/stylesheet.css">
  <script src="scripts/enhancements.js"></script>
  <script src="scripts/payment.js"></script>
</head>
<body id="home">
  <?php include "header.inc"; ?>
  <?php include "menu.inc"; ?>

  <article class="fullpage">
    <br>
    <form action="https://mercury.swin.edu.au/it000000/formtest.php" method="post" id="form" novalidate>
      <fieldset>
        <legend>Your Details</legend>
        <p>
          <label for="first-name">First Name:</label>
          <input type="text" name="first-name" id="first-name" pattern="[a-zA-Z]+" maxlength="25" required class="disable">
        </p>
        <p>
          <label for="last-name">Last Name:</label>
          <input type="text" name="last-name" id="last-name" pattern="[a-zA-Z]+" maxlength="25" required class="disable">
        </p>
        <p>
          <label for="email">Email Address:</label>
          <input type="text" name="email" size="40" id="email" required class="disable">
        </p>
      </fieldset>
      <fieldset>
        <legend>Address</legend>
        <p><label for="street">Street Address:</label><input type="text" name="street" id="street" maxlength="40" size="40" required class="disable"> </p>
        <p><label for="suburb">Suburb/Town:</label><input type="text" name="suburb" id="suburb" maxlength="20" required class="disable"> </p>
        <p>
          <label for="state">State:</label>
          <select name="state" id="state" required class="disable">
            <option value="">Select...</option>
            <option value="VIC">VIC</option>
            <option value="NSW">NSW</option>
            <option value="QLD">QLD</option>
            <option value="NT">NT</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="TAS">TAS</option>
            <option value="ACT">ACT</option>
          </select>
        </p>
        <p><label for="zip">Postcode:</label><input type="text" name="zip" id="zip" size="4" pattern="[0-9]{4}" maxlength="4" required class="disable"> </p>
      </fieldset>
      <p><label for="phone" class="bold">Phone Number:</label><input type="text" name="phone" id="phone" maxlength="10"  pattern="[0-9]{10}" placeholder="0401020304" size="10" required class="disable"> </p>
      <p>
        <label class="bold">Preferred Contact:</label>
        <input type="radio" name="contact" value="email" id="cemail" required class="disable"> <label for="cemail">Email</label>
        <input type="radio" name="contact" value="post" id="post" class="disable"> <label for="post">Post</label>
        <input type="radio" name="contact" value="phone" id="cphone" class="disable"> <label for="cphone">Phone</label>
      </p>
      <p>
        <label for="product" class="bold">Product:</label>
        <select name="product" id="product" required class="disable">
          <option value="">Select...</option>
          <option value="R315">R315-----200AUD</option>
          <option value="P600">P600-----600AUD</option>
          <option value="I30">I30-----150AUD</option>
        </select>
      </p>
      <p>
        <label for="amount" class="bold">Amount:</label>
        <input type="text" name="amount" id="amount" value="1" size="3" required class="disable">
      </p>
      <p>
        <label class="bold">Features:</label>
      </p>
      <p>
        <input type="checkbox" name="features[]" value="case" id="case" class="disable"><label for="case">Case</label>
        <input type="checkbox" name="features[]" value="pro" id="pro" class="disable"><label for="pro">Pro Version</label>
        <input type="checkbox" name="features[]" value="battery" id="battery" class="disable"><label for="battery">6000MHa Battery</label>
      </p>
      <p class="bold comment">Comments:<br>
      <textarea id="comment" rows="5" cols="50" name="comment" class="disable"></textarea></p>
      <hr>
      <h2 class="bold" id="payment">Credit Card Payment</h2>
      <p><label for="type">Type:</label>
        <select id="type" name="type" required>
          <option value="">Select...</option>
          <option value="visa">Visa</option>
          <option value="master card">Master Card</option>
          <option value="american express">American Express</option>
        </select>
      </p>
      <p>
        <label for="name" >Name: </label>
        <input type="text" name="name" pattern="[a-zA-Z ]+" size="40" maxlength="40" id="cardName" required value="">
      </p>
      <p>
        <label for="card">Card Number: </label><input type="text" name="card" id="card" pattern="[0-9]{15,16}" size="16" required>
      </p>
      <p>
        <label for="exp">Expiration: </label><input type="text" name="exp" id="exp" pattern="[0-1][0-9]/[0-9]{2}" size="5" placeholder="01/10" required>
        <label for="cvv">  CVV: </label><input type="text" name="cvv" id="cvv" pattern="[0-9]{3}" size="3" required>
      </p>
      <h2>Time Left: <span id="time"></span> </h2>
      <p class="right bold">Total: <span id="total">0</span> AUD <br> <button type="button" id="cancelbutton" name="button">Cancel Order</button> <input type="submit" class="button" value="Check Out">  </p>

    </form>
  </article>
  <?php include "footer.inc"; ?>

</body>
</html>

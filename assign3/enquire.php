<!-- enquire page to request product demo -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Get to know the best mobile phone in the market" />
  <meta name="keywords" content="cellphone, buy, cheap, awesome" />
  <meta name="author" content="Sergio Alvarado"  />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>RANDOM Make an enquire</title>
  <link rel="stylesheet" href="styles/style.css" media="(min-width:701px)">
  <link href="styles/mobile_device.css" rel="stylesheet" media="(max-width:700px)">
  <link rel="stylesheet" href="styles/webfontkit/stylesheet.css">
  <script src="scripts/enquire.js"></script>
</head>
<body id="home">
  <?php include "header.inc"; ?>
  <?php include "menu.inc"; ?>

  <article class="fullpage">
    <br>
    <h1 class="bold">Make an enquire:</h1>
    <form id="form" action="payment.php#payment" method="post" novalidate>
      <fieldset>
        <legend>Your Details</legend>
        <p>
          <label for="first-name">First Name:</label>
          <input type="text" name="first-name" id="first-name" pattern="[a-zA-Z]+" maxlength="25" required>
        </p>
        <p>
          <label for="last-name">Last Name:</label>
          <input type="text" name="last-name" id="last-name" pattern="[a-zA-Z]+" maxlength="25" required>
        </p>
        <p>
          <label for="email">Email Address:</label>
          <input type="text" name="email" size="40" id="email" required>
        </p>
      </fieldset>
      <fieldset>
        <legend>Address</legend>
        <p><label for="street">Street Address:</label><input type="text" name="street" id="street" maxlength="40" size="40" required> </p>
        <p><label for="suburb">Suburb/Town:</label><input type="text" name="suburb" id="suburb" maxlength="20" required> </p>
        <p>
          <label for="state">State:</label>
          <select name="state" id="state" required>
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
        <p><label for="zip">Postcode:</label><input type="text" name="zip" id="zip" size="4" pattern="[0-9]{4}" maxlength="4" required> </p>
      </fieldset>
      <p><label for="phone" class="bold">Phone Number:</label><input type="text" name="phone" id="phone" maxlength="10"  pattern="[0-9]{10}" placeholder="0401020304" size="10" required> </p>
      <p>
        <label class="bold">Preferred Contact:</label>
        <input type="radio" name="contact" value="email" id="cemail" required> <label for="cemail">Email</label>
        <input type="radio" name="contact" value="post" id="post"> <label for="post">Post</label>
        <input type="radio" name="contact" value="phone" id="cphone"> <label for="cphone">Phone</label>
      </p>
      <p>
        <label for="product" class="bold">Product:</label>
        <select name="product" id="product" required>
          <option value="">Select...</option>
          <option value="R315">R315-----200AUD</option>
          <option value="P600">P600-----600AUD</option>
          <option value="I30">I30-----150AUD</option>
        </select>
      </p>
      <p>
        <label for="amount" class="bold">Amount:</label>
        <input type="text" name="amount" id="amount" value="1" size="3" required>
      </p>
      <p>
        <label class="bold">Features:</label>
      </p>
      <p>
        <input type="checkbox" name="features[]" value="case" id="case" checked><label for="case">Case</label>
        <input type="checkbox" name="features[]" value="pro" id="pro"><label for="pro">Pro Version</label>
        <input type="checkbox" name="features[]" value="battery" id="battery"><label for="battery">6000MHa Battery</label>
      </p>
      <p><label for="comment" class="bold">Comments:</label></p>
      <p><textarea id="comment" rows="5" cols="50" name="comment" placeholder="Please tell us more about your interest in the product."></textarea></p>
      <p class="right bold">Total: <span id="total">0</span> AUD <br> <input type="submit" class="button" value="Pay Now"></p>

    </form>
  </article>
  <?php include "footer.inc"; ?>

</body>
</html>

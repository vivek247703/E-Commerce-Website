<?php
  session_start();
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Billing Address</title>
    <link href="style4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<?php
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
       
     header("Location: payment.php");
    
}
?>
     <div class="wrapper">
     <h2>Billing Address</h2>
     <form action="myorders.php" method="POST" id="nameform">
          <h4>Account</h4>
          <div class="input-group">
                <div class="input-box">
                      <input type="text" name="fname" value="" placeholder="Full Name" required class="name">
                      <i class="fa fa-user icon"></i>
                </div>
          </div>
          <h4>Mobile No</h4>
          <div class="input-group">
                <div class="input-box">
                      <input type="number" name="mob" value="" placeholder="Mobile Number" required class="name">
                      <i class="fa fa-mobile icon"></i>
                </div>
          </div>

          <div class="input-group">
                <div class="input-box">
                      <input type="email" name="mail" value="" placeholder="Email Address" required class="name">
                      <i class="fa fa-envelope icon"></i>
                </div>
          </div>
          <h4>Address</h4>
          <div class="input-group">
                <div class="input-box">
                      <input type="text" name="add" value="" placeholder="flat,House no.,building" required class="name">
                      <i class="fa fa-home icon"></i>
                </div>
          </div>
          <div class="input-group">
                <div class="input-box">
                      <input type="text" name="area" value="" placeholder="area,street,colony" required class="name">
                      <i class="fa fa-road icon"></i>
                </div>
          </div>
          <div class="input-group">
                <div class="input-box">
                      <input type="text" name="city" value="" placeholder="Town/City" required class="name">
                      <i class="fa fa-map-marker icon"></i>
                </div>
          </div>

          <div class="input-group">
                <div class="input-box">
                <input type="text" name="state" value="" placeholder="State" required class="name">
                <i class="fa fa-map-marker icon"></i>
                </div>
          </div>
          
          <div class="input-group">
                <div class="input-box">
                      <h4>Payment Method<h4>
                      <input type="radio" name="pay" id="bc1" checked class="radio">
                      <label for="bc1"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
                      <input type="radio" name="pay" id="bc2" checked class="radio">
                      <label for="bc2"><span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
                </div>
          </div>
          <div class="input-group">
                <div class="input-box">
                <a href="payment.php"><button type="submit" name="submit" form="nameform" value="submit">Procees To Payment</button><a>
                </div>
          </div>

    </form>
    </div>    
    </body> 
    </html>
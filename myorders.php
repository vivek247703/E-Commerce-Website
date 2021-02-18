<?php
  session_start();
?>
<!Doctype html>
<html>
<head>
   <title>my orders</title>
   <link rel="stylesheet" href="style5.css">
<head>
<body>
<div class="header">
<h1>Orders Details</h1>
<div class="header-1">
<h2>Customer Details</h2>
<?php
         $customer = $_POST['fname'];
         $mobno = $_POST['mob'];
         $email = $_POST['mail'];
        
         echo "<strong>Name:-</strong>$customer";
         echo "<br>";
         echo "<strong>Mobile no:-</strong>$mobno";
         echo "<br>";
         echo "<strong>Email Id:-</strong>$email";
?>
</div>
<br>
<div class="header-1">
<h2>Billing Address</h2>
<?php
         $Address = $_POST['add'];
         $Area = $_POST['area'];
         $Town = $_POST['city'];
         $State = $_POST['state'];
         
        
         echo "<strong>Flat No:-</strong>$Address";
         echo "<br>";
         echo "<strong>Area/street Name:-</strong>$Area";
         echo "<br>";
         echo "<strong>City:-</strong>$Town";
         echo "<br>";
         echo "<strong>State:-</strong>$State";
?>
</div>

<br>
<div class="header-1">
<h2>Shiiping Address</h2>
<?php
         $Address = $_POST['add'];
         $Area = $_POST['area'];
         $Town = $_POST['city'];
         $State = $_POST['state'];
         
        
         echo "<strong>Flat No:-</strong>$Address";
         echo "<br>";
         echo "<strong>Area/street Name:-</strong>$Area";
         echo "<br>";
         echo "<strong>City:-</strong>$Town";
         echo "<br>";
         echo "<strong>State:-</strong>$State";
?>
</div>
<br>
<div class="header-1">
<h2>Payment Information</h2>
<h5>Through Creadit Card</h5>
</div> 
</div>
<div class="input-group">
                <div class="input-box">
                <a href="Allproducts.php"><button type="submit" name="submit" form="nameform" value="submit">Continue Shopping</button><a>
                </div>
          </div>
</body>
<html>

<?php

session_start();



?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Cart</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
	<div class="header">
	    <div class="container">
		    <div class="navbar">
                <div class="logo">
                    <img src="images/logo1.png" width="200px">
                </div>
                <nav>
    	            <ul>
    		            <li><a href="home.php">Home</a></li>
    		            <li><a href="AllProducts.php">Products</a></li>
    		            <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
    		            <li><a href="logout.php">Logout</a></li>
    	            </ul>
                </nav>
                    <?php
				       $count=0;
					   if(isset($_SESSION['cart']))
					   {
						 $count=count($_SESSION['cart']);
					   }

				    ?>
                     <a href="mycart.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>
            </div>
 	    </div>
 	</div>
 	 <br>
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center border rounded bg-light my-5">
                 <h1>My Cart</h1>
              </div>
              <div class="col-lg-8">
              <table class="table table-dark">
                 <thead class="text-center">
                   <tr>
                     <th scope="col">Serial No.</th>
                     <th scope="col">Item Name</th>
                     <th scope="col">Item Price</th>
                     <th scope="col">quantity</th>
                     <th scope="col"></th>
                    </tr>
                 </thead>
               <tbody class="text-center">
                <?php
                   $total=0;   
                   if(isset($_SESSION['cart']))
                   {
                       foreach ($_SESSION['cart'] as $key => $value) {
                           $sr=$key+1;
                           $total=$total+$value['price'];
                           echo "
                             <tr>
                                 <td>$sr</td>
                                 <td>$value[item_name]</td>
                                 <td>$value[price]</td>
                                 <td><input class='text-center' type='number' value='$value[quantity]' min='1' max='10'</td>
                                 <td>
                                 <form action='manage_cart.php' method='POST'>
                                 <button name='remove_item' class='btn-outline-danger'>REMOVE</button></td>
                                 <input type='hidden' name='item_name' value='$value[item_name]'>  
                                 </form>
                                 </td>
                              </tr>
                           ";
                       }
                   }
                ?>
                  
                  
              </tbody>
              </table>
              </div>
              <!---<div class="col-lg-4">--->
              <div class="border bg-light rounded">
                 <h5>TOTAL:-</h5>
                 <h5><?php echo $total?></h5>
                 <br>
                 <form action="payment.php" method="POST">
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Online Pyment</label><br>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Cash On Delievery</label>
                 </div>
                 <a href="payment.php"><button class="btn btn-primary">Proccessd</button></a>
                 </form>
              </div>
              </div>
          </div>
      </div>
<!------------------footer------------------>
      <div class="footer">
	<div class="container">
		<div class="row">
			<div class="foter-col-1">
				<h3>Download Our App</h3>
				<p>Download App For Android And ios Mobie</p>
				<div class="app-logo">
					<img src="images/logo2.png">
					<img src="images/logo3.png">
				</div>
			</div>
			<div class="foter-col-2">
				<img src="images/logo1.png">
				<p>Our Purspose Is Benefits Of Fashionable Products To Many</p>
			</div>
			<div class="foter-col-3">
				<h3>Useful Links</h3>
		        <ul>
		        	<li>Coupons</li>
		        	<li>Blog Post</li>
		        	<li>Return Policy</li>
		        	<li>Affedevites</li>
		        </ul>
			</div>
			<div class="foter-col-4">
				<h3>Follow us on</h3>
		        <ul>
		        	<li>Facebook</li>
		        	<li>Instagram</li>
		        	<li>Twitter</li>
		        	<li>Youtube</li>
		        </ul>
			</div>
		</div>
        <hr>
        <p class="Copyright">@Copyright 2020 - SuperMart</p>
    </div>
</div>
</body>
</html>

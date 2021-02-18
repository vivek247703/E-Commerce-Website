<?php

session_start();



?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Prodcuts</title>
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
<!---------Featured Products ----------->
<a href="myorders.php">my order</a>
<div class="top">
<h2>What Are You Lokking For? :-</h2>
<a href="#tittle" class="btn1">T-Shirts</a>
<a href="#tittle1" class="btn1">Casual Shirts</a>
<a href="#tittle2" class="btn1">Formal Shirts</a>
<a href="#tittle2" class="btn1">Formal Shirts</a>
<a href="#tittle2" class="btn1">Formal Shirts</a>
<a href="#tittle2" class="btn1">Formal Shirts</a>
</div>
<h2 id="tittle">Branded T-Shirts</h2>
<div class="container">
    <div class="row">
	   <div class="col-lg-3">
	   <form action="manage_cart.php" method="POST">
	   <div class="card">
           <img src="images/rp.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
              <h5 class="card-title">Red Printed T-Shirt</h5>
			  <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
              <p class="card-text">Rs 500</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
			  <input type="hidden" name="item_name" value="Red Printed T-Shirt">
			  <input type="hidden" name="price" value="500">
            </div>
        </div>
		</form>
	   </div>
	   <div class="col-lg-3">
	   <form action="manage_cart.php" method="POST">
	   <div class="card">
           <img src="images/p1.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
              <h5 class="card-title">Printed T-Shirt</h5>
			  <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
              <p class="card-text">Rs 450</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
			  <input type="hidden" name="item_name" value="Printed T-Shirt">
			  <input type="hidden" name="price" value="450">
            </div>
        </div>
		</form>
        </div>
		<div class="col-lg-3">
	   <form action="manage_cart.php" method="POST">
	   <div class="card">
           <img src="images/bp1.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
              <h5 class="card-title">Black Printed T-Shirt</h5>
			  <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
              <p class="card-text">Rs 800</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
			  <input type="hidden" name="item_name" value="Black Printed T-Shirt">
			  <input type="hidden" name="price" value="800">
            </div>
        </div>
		</form>
	   </div>
    </div>
</div>
<br>
<h2 id="tittle1">Branded Casual Shirts</h2>
<div class="container">
    <div class="row">
	   <div class="col-lg-3">
	   <form action="manage_cart.php" method="POST">
	   <div class="card">
           <img src="images/casual1.png" class="card-img-top" alt="...">
           <div class="card-body text-center">
              <h5 class="card-title">Blue Casual Shirt</h5>
			  <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
              <p class="card-text">Rs 1500</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
			  <input type="hidden" name="item_name" value="Blue Casual Shirt">
			  <input type="hidden" name="price" value="1500">
            </div>
        </div>
		</form>
	   </div>
	   <div class="col-lg-3">
	   <form action="manage_cart.php" method="POST">
	   <div class="card">
           <img src="images/casual2.png" class="card-img-top" alt="...">
           <div class="card-body text-center">
              <h5 class="card-title">Black Casual Shirt</h5>
			  <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
              <p class="card-text">Rs 2550</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
			  <input type="hidden" name="item_name" value="Black Casual Shirt">
			  <input type="hidden" name="price" value="2550">
            </div>
        </div>
		</form>
        </div>
		<div class="col-lg-3">
	   <form action="manage_cart.php" method="POST">
	   <div class="card">
           <img src="images/casual3.png" class="card-img-top" alt="...">
           <div class="card-body text-center">
              <h5 class="card-title">Blue White Shirt</h5>
			  <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
              <p class="card-text">Rs 3000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
			  <input type="hidden" name="item_name" value="Blue White Shirt">
			  <input type="hidden" name="price" value="3000">
            </div>
        </div>
		</form>
	   </div>
    </div>
</div>
<br>
<h2 id="tittle2">Branded Formal Shirts</h2>
<div class="container">
    <div class="row">
	   <div class="col-lg-3">
	   <form action="manage_cart.php" method="POST">
	   <div class="card">
           <img src="images/formal1.png" class="card-img-top" alt="...">
           <div class="card-body text-center">
              <h5 class="card-title">Blue Formal Shirt</h5>
			  <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
              <p class="card-text">Rs 999</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
			  <input type="hidden" name="item_name" value="Blue Formal Shirt">
			  <input type="hidden" name="price" value="999">
            </div>
        </div>
		</form>
	   </div>
	   <div class="col-lg-3">
	   <form action="manage_cart.php" method="POST">
	   <div class="card">
           <img src="images/formal2.png" class="card-img-top" alt="...">
           <div class="card-body text-center">
              <h5 class="card-title">White Formal Shirt</h5>
			  <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
              <p class="card-text">Rs 1550</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
			  <input type="hidden" name="item_name" value="White Formal Shirt">
			  <input type="hidden" name="price" value="1550">
            </div>
        </div>
		</form>
        </div>
		<div class="col-lg-3">
	   <form action="manage_cart.php" method="POST">
	   <div class="card">
           <img src="images/formal3.png" class="card-img-top" alt="...">
           <div class="card-body text-center">
              <h5 class="card-title">Marron Formal Shirt</h5>
			  <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
              <p class="card-text">Rs 3000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
			  <input type="hidden" name="item_name" value="Marron Formal Shirt">
			  <input type="hidden" name="price" value="3000">
            </div>
        </div>
		</form>
	   </div>
    </div>
</div>

<!-----------footer------------->
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

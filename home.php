<?php

session_start();


?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>SuperMart</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                     <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            </div>
             <div class="row">
    	        <div class="col-2">
    		            <h1>Change Your Style<br>With SuperMart</h1>
    		            <p>"Fashion is the armor to survive the reality of everyday life."<br>�Bill Cunningham</p>
    		            <a href="#tittle" class="btn">Explore Now &#8594;</a>
                </div>
    	        <div class="col-2">
                    <img src="images/front1.jpg">
    	        </div>	
             </div>
           </div>
 	 </div>
 	 <br>
</div
<!---------Featured Products ----------->
<div class="small-container">
	<h2 id="tittle">Featured Products</h2>
	<div class="row">
		<div class="col-4">
			<img src="images/p1.jpg">
			<h4>Printed T-Shirts</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>450 Rs.</p>
		</div>
		<div class="col-4">
			<img src="images/p2l.jpg">
			<h4>Casual Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>1500 Rs.</p>
		</div>
		<div class="col-4">
			<img src="images/p3.jpg">
			<h4>Formal Shirts</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<p>2500 Rs.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<img src="images/l1.jpg">
			<h4>Vans</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>700 Rs.</p>
		</div>
		<div class="col-4">
			<img src="images/l2n.jpg">
			<h4>Sport Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>1500 Rs.</p>
		</div>
		<div class="col-4">
			<img src="images/l3.jpg">
			<h4>Jeans</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<p>2500 Rs.</p>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!---------------slider-------------->
<div class="small-container">
<div class="slidershow middle">
<h2 id="tittle">Trending Products</h2>
      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="images\slider 1.png" alt="">
        </div>
        <div class="slide">
          <img src="images\slider 2.png" alt="">
        </div>
        <div class="slide">
          <img src="images\slider 3.png" alt="">
        </div>
        <div class="slide">
          <img src="images\slider 4.png" alt="">
        </div>
        <div class="slide">
          <img src="images\slider 5.png" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>
</div>
<!----------- offer ----------------->
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="images/offer.jpg" class="offer-img">
			</div>
			<div class="col-2">
				<p>Exclusvely Available On SuperMart</p>
				<h1>Smart Watch</h1>
				<small>Apple Watch Series 6 features cellular, and you can create your style.</small>
				<a href="" class="btn">Bye Now </a>
			</div>
		</div>
	</div>
</div>
<!--------------Brand Partners---------------->
<div class="brands">
	<div class="small-container">
		<h2 id="tittle">Official Partners</h2>
		<div class="row">
			<div class="col-5">
				<img src="images/adi.png">
			</div>
			<div class="col-5">
				<img src="images/nike.png">
			</div>
			<div class="col-5">
				<img src="images/puma.png">
			</div>
			<div class="col-5">
				<img src="images/peter.png">
			</div>
		</div>
	</div>
</div>
<!--------------Payment Partners--------------->
<div class="brands">
	<div class="small-container">
		<h2 id="tittle">Payment Partners</h2>
		<div class="row">
			<div class="col-5">
				<img src="images/google.png">
			</div>
			<div class="col-5">
				<img src="images/paytm.jpeg">
			</div>
			<div class="col-5">
				<img src="images/phonepe.png">
			</div>
			<div class="col-5">
				<img src="images/pay.png">
			</div>
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

<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!---<link rel="stylesheet" href="main.css">---->
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
    		            <li><a href="index.php">Home</a></li>
    		            <li><a href="#">Products</a></li>
    		            <li><a href="#">About Us</a></li>
    		            <li><a href="#">Contact</a></li>
                        <li><a href="lo.php">Account</a></li>
    	            </ul>
                </nav>
                     <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            </div>
        </div>
    </div>
    <section class="contact">
         <div class="conent-1">
            <h2>Contact Us</h2>
         </div>
         <div class="container-1">
              <div class="contactinfo">
                  <div class="box">
                        <div class="icons"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <div class="tex">
                              <h3>Creator</h3>
                              <p>Vivek Hariyan</p>
                        </div>
                  </div>
                  <div class="box">
                        <div class="icons"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="tex">
                              <h3>Address</h3>
                              <p>A-22 Sunshine Xomplex,<br>Nallsopara West,<br>401 209</p>
                        </div>
                  </div>
                  <div class="box">
                        <div class="icons"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="tex">
                              <h3>Email</h3>
                              <p>VivekHariyanSuperMart@gmail.com</p>
                        </div>
                  </div>
                  <div class="box">
                        <div class="icons"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="tex">
                              <h3>Contact</h3>
                              <p>9821707675</p>
                        </div>
                  </div>
              </div>
              <div class="contactform">
                   <form>
                        <h2>Send Message</h2>
                        <div class="inputbox">
                             <input type="text" name="" required>
                             <span>Full Nmame</span>
                        </div>
                        <div class="inputbox">
                             <input type="text" name="" required>
                             <span>E-Mail</span>
                        </div>
                        <div class="inputbox">
                             <textarea required></textarea>
                             <span>Type Your Message..</span>
                        </div>
                        <div class="inputbox">
                             <input type="submit" name="" value="Send">
                        </div>
                    </form>
              </div>
         </div>
    </section>
    </body>
    </html>
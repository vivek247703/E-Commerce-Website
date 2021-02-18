<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<title>Registration Page</title>
	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: 'Poppins', sans-serif;
}

.navbar {
	display: flex;
	align-items: center;
	padding: 20px;
}
nav {
	flex: 1;
	text-align: right;
}
nav ul {
	display: inline-block;;
	list-style-type: none;
}
nav ul li {
	display: inline-block;
	margin-right: 20px;
}
a {
	text-decoration: none;
	color: #555;
}
p{
	color: #555;
}
.container {
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px;
}
.row {
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	justify-content: space-around;
}
.col-2{
	flex-basis: 50%;
	min-width: 300px;
}

.col-2 img{
	max-width: 100%;
	padding: 50px 0;
}
.col-2 h1{
	font-size: 50px;
	line-height: 60px;
	margin: 25px 0;
}
.btn{
	display: inline-block;;
	background: #32CD32;
	color: #fff;
	padding: 16px 60px;
	margin: 30px 0;
	border-radius: 30px; 
	transition: background 0.5s;
	cursor: pointer;
}

.btn:hover{
	background: #563434;
}
.header{
	background: radial-gradient(#fff,#d8ffd6);
}
.header .row{
	margin-top: 70px;
}
.categories{
	margin: 70px 0px;
}
.col-3{
	flex-basis: 30%;
	min-width: 250px;
	margin-bottom: 30px;
}
.col-3 img{
	width: 100%;
}
.small-container{
	max-width: 1080px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px; 
}
.col-4{
	flex-basis: 25%;
	padding: 10px;
	min-width: 200px;
	margin-bottom: 50px;
	transition: 0.5s;
}

.col-4 img{
	width: 100%;

}
.title{
	text-align: center;;
	margin: 0 auto 80px;
	position: relative;
	line-height: 60px;
	color: #555;
}
.title::after{
	content: '';
	background: #32CD32;
	width: 80px;
	height: 5px;
	border-radius: 5px;
	position: absolute;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
}
h4{
	color: #555;
	font-weight: normal;
}
.col-4 p{
	font-size: 14px;
}
.rating .fa{
	color: #32CD32;
}
.col-4:hover{
	transform: translateY(-5px);
}


.offer{
	background: radial-gradient(#fff,#d8ffd6);
	margin-top: 80px;
	padding: 30px 0;
}
.col-2 .offer-img{
	padding: 50px;
}
small{
color: #555;	
}

.testimonial {
	padding-top: 100px;
}
.testimonial .col-3{
	text-align: center;
	padding: 40px 20px;
	box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
	cursor: pointer;
	transition: transform 0.5s;
}
.testimonial .col-3 img{
	width: 50px;
	margin-top: 20px;
	border-radius: 50%;
}
.testimonial .col-3:hover{
	transform: translateY(-10px);
}

.fa.fa-quote-left{
	font-size: 34px;
	color: #32CD32;
}
.col-3 p{
	font-size: 12px;
	margin: 12px 0;
	color: #777;
}
.testimonial .col-3 h3{
	font-weight: 600;
	color: #555;
	font-size: 16px;
}
.brands{
	margin: 100px auto;
}
.col-5{
	width: 160px;
}
.col-5 img{
	width: 100%;
	cursor: pointer;
	filter: grayscale(100%);
}
.col-5 img:hover{
	filter: grayscale(0);
}


.footer{
	background: #000;
	color: #8a8a8a;
	font-size: 14px;
	padding: 60px 0 20px;
}

.foter p{
	color: #8a8a8a;
}
.foter h3{
	color: #fff;
	margin-bottom: 20px;
}
.foter-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
	min-width: 250px;
	margin-bottom: 20px;
}
.foter-col-1{
	flex-basis: 30%;
}
.foter-col-2{
	flex: 1;
	text-align: center;
}
.foter-col-2 img{
	width: 180px;
	margin-bottom: 20px;
}
.foter-col-3, .footer-col-4{
	flex-basis: 12%;
	text-align: center;
}
ul{
	list-style-type: none;
}
.app-logo{
	margin-top: 20px;
}
.app-logo img{
	width: 140px;
}
.footer hr{
	border: none;
	background: #b5b5b5;
	height: 1px;
	margin: 20px 0;
}
.copyright{
	text-align: center;
}

.menu-icon{
	width: 28px;
	margin-left: 20px;
	display: none;
}


.row-2{
	justify-content: space-between;
	margin: 100px auto 50px;
}

select {
	border: 1px solid #32CD32;
	padding: 5px;
}
select:focus{
	outline: none;
}
.page-btn{
	margin: 0 auto 80px;
}
.page-btn span{
	display: inline-block;;
	border: 1px solid #32CD32;
	margin-left: 10px;
	width: 40px;
	height: 40px;
	text-align: center;
	line-height: 40px;
	cursor: pointer;
}

.page-btn span:hover{
	background: #32CD32;
	color: #fff;
}

/*-----------Single Product----------*/
.single-product{
	margin-top: 80px;
}
.single-product .col-2 img{
	padding: 0;
}
.single-product .col-2{
	padding: 20px;
}
.single-product h4{
	margin: 20px 0px;
	font-weight: bold;
	font-size: 22px;
}
.single-product select{
	display: block;
	padding: 10px;
	margin-top: 20px;
}
.single-product input{
	width: 50px;
	height: 40px;
	padding-left: 10px;
	font-size: 20px;
	margin-right: 10px;
	border: 1px solid #32CD32;
}

input:focus{
	outline: none;
}

.single-product .fa{
	color: #32CD32;
	margin-left: 10px;
}
.small-img-row{
	display: flex;
	justify-content: space-between;
}

.small-img-col{
	flex-basis: 24%;
	cursor: pointer;
}

/*---------------Account---------*/

.account-page{
	padding: 50px 0px;
	background: radial-gradient(#fff,#d8ffd6);
}

.form-container{
	background: #fff;
	width: 300px;
	height: 400px;
	position: relative;
	text-align: center;
	padding: 20px 0px;
	margin: auto;
	box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
	overflow: hidden;
}

.form-container span{
	font-weight: bold;
	padding: 0 10px;
	color: #555;
	cursor: pointer;
	width: 100px;
	display: inline-block;
}

.form-btn{
	display: inline-block;
}

.form-container form{
	max-width: 300px;
	padding: 0 20px;
	position: absolute;
	top: 130px;
	transition: transform 1s;
}

form input{
	width: 100%;
	height: 30px;
	margin: 10px 0;
	padding: 0 10px;
	border: 1px solid #ccc;
}

form .btn{
	width: 100%;
	border: none;
	cursor: pointer;
	margin: 10px 0;
}

form .btn:focus{
	outline: none;
}

#LoginForm{
	left: -300px;
}
#RegForm{
	left: 0px;
}
form a{
	font-size: 12px;
}
#Indicator{
	width: 100px;
	border: none;
	background: #32CD32;
	height: 3px;
	margin-top: 8px;
	transform: translateX(100px);
	transition: transform 1s;
}






@media only screen and (max-width: 800px){
	nav ul{
		position: absolute;
		top: 70px;
		left: 0;
		background: #333;
		width: 100%;
		overflow: hidden;
		transition: max-height 0.5s;
	}
	nav ul li{
		display: block;
		margin-right: 50px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	nav ul li a{
		color: #fff;
	}
	.menu-icon{
		display: block;
		cursor: pointer;
	}
}

/*----------cart-items-------------*/

.cart-page{
	margin: 80px auto;
}
table {
	width: 100%;
	border-collapse: collapse;;
}

.cart-info{
	display: flex;
	flex-wrap: wrap;
}

th{
	text-align: left;
	padding: 5px;
	color: #fff;
	background: #32CD32;
	font-weight: normal;
}

td{
	padding: 10px 5px;
}

td input{
	width: 40px;
	height: 30px;
	padding: 5px;
}


td a{
	color: #32CD32;
	font-size: 12px;
}

td img{
	width: 80px;
	height: 80px;
	margin-right: 10px;
}

.total-price{
	display: flex;
	justify-content: flex-end;
}
.total-price table{
	border-top: 3px solid #32CD32;
	width: 100%;
	max-width: 400px;
}

td:last-child{
	text-align: right;
}
th:last-child{
	text-align: right;
}

.prod-img {
	width: 100%;
	justify-content: center;
	border: 0px;
	padding: 0;
	margin: 0;
	cursor: pointer;
}
.prod-img:select {
	outline: none;
}

.img-btn{
	width: 100%;
	justify-content: center;
	border: 0px;
	padding: 0;
	margin: 0;
	cursor: pointer;
}


@media only screen and (max-width: 600px){
	.row{
		text-align: center;
	}
	.col-2, .col-3, .col-4{
		flex-basis: 100%;
	}
	.single-product .row{
		text-align: left;
	}
	.single-product .col-2{
		padding: 20px 0;
	}
	.single-product h1{
		font-size: 26px;
		line-height: 20px;
	}
	.cart-info p{
		display: none;
	}
}
	</style>
</head>
<body>
	<div class="container">
		<div class="navbar">
		<div class="logo">
		     <img src="images/logo1.png" width="200px">
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="index.php">Home</a></li>
				<li><a href="">Product</a></li>
				<li><a href="aboutus.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="lo.php">Account</a></li>
			</ul>
		</nav>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px;"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
	</div>
</div>

<!-----------account-page-------------->
<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="images\front3.jpg" width="100%">
			</div>


			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="Indicator">
					</div>
				<form id="LoginForm" method="POST" action="validation.php">
					<input type="text" placeholder="Username" name="user" required>
					<input type="password" placeholder="Password" name="password" required>
					<button type="submit" class="btn" name="Login">Login</button>
				</form>

				<form id="RegForm" method="POST" action="registration1.php">
					<input type="text" placeholder="Username" name="user" required>
					<input type="password" placeholder="Password" name="password" required>
					<button type="submit" class="btn" name="Register">Register</button>
				</form>
			</div>
		</div>
	</div>
	</div>
</div>





<!-------------Footer------------------->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="foter-col-1">
				<h3>Download Our App</h3>
				<p>Download App for Android and ios mobile phone</p>
				<div class="app-logo">
					<img src="images\logo2.png">
					<img src="images\logo3.png">
				</div>
			</div>
			<div class="foter-col-2">
				<img src="images\logo1.png">
				<p>Our purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
			</div>
			<div class="foter-col-3">
				<h3>Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Return Policy</li>
					<li>Join Affiliate</li>
				</ul>
			</div>
			<div class="foter-col-4">
				<h3>Follow us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>YouTube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">Project By - Vivek Hariyan</p>
	</div>
</div>

<!------<?php
	if (isset($_POST['Login'])) {

		$query = "SELECT * FROM `account` WHERE `username` = '$_POST[loginUser]' AND `password` = '$_POST[loginPass]'";
		$query_run = mysqli_query($conn,$query);
		if(mysqli_num_rows($query_run) == 1)
		{
			echo "<script> alert('Logged in Successfully');
				</script>";
			#$_SESSION['User'] = $_POST['loginUser'];
			header("location: index.html");
		}
		else {
			echo "<script>alert('Incorrect Username or Password')</script>";
		}
	}
	if (isset($_POST['Register'])) {
		$query = "INSERT INTO account(username,password,email) VALUES ('$_POST[regUser]','$_POST[regPass]','$_POST[regEmail]')";
		$query_run = mysqli_query($conn,$query);
		if ($query_run) {
			echo "<script>alert('Successfully Registered');</script>";
			header("location: index.html");
		}
		else{
			echo "<script>alert('Registration Failed');</script>";
			header("location: register.php");
		}
	}
?>---------->

<!----------JS Toggle For Menu--------------->

<script>
	var MenuItems = document.getElementById("MenuItems");
	MenuItems.style.maxHeight = "0px";
	function menutoggle()
	{
		if(MenuItems.style.maxHeight == "0px")
		{
			MenuItems.style.maxHeight = "200px";
		}
		else
		{
			MenuItems.style.maxHeight = "0px";
		}
	}
</script>


<!----------JS Toggle For Form--------------->
<script type="text/javascript">
	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator");

	function register(){
		RegForm.style.transform = "translateX(0px)";
		LoginForm.style.transform = "translateX(0px)";
		Indicator.style.transform = "translateX(100px)";
	}

	function login(){
		RegForm.style.transform = "translateX(300px)";
		LoginForm.style.transform = "translateX(300px)";
		Indicator.style.transform = "translateX(0px)";
	}
</script>

</body>
</html>


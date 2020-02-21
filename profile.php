<?php
    session_start();
    include("connect.php"); 
    if(!$_SESSION['username'])  
    {  
        header("Location: login.php");  
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>User Information</title>
<link rel="stylesheet" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>
	<!-- Header -->
	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="header_content d-flex">
					<div class="logo"><a href="#" style="font-size: 30px;">Campus Accessories</a></div>
					<nav class="main_nav">
						<ul>
							<li class="subs">
								<a href="index2.php">Home</a>
								<ul>
									<li><a href="product.php">Product</a></li>
									<li><a href="checkout.php">Checkout</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</li>
							<li class="subs">
								<a href="#">Categories</a>
								<ul>
									<li><a href="student.php">Student</a></li>
									<li><a href="official.php">Official</a></li>
									<li><a href="electronics.php">Electronics</a></li>
								</ul>
							</li>
							<li><a href="contact2.php">Contact</a></li>
							<li class="subs">
								<a href="#">User</a>
								<ul>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					
						<div class="search">
							<div class="search_icon">
								<img src="images/search.png" style="width:16px;height:16px;"> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Search Panel -->
		<div class="search_panel">
			<div class="container">
				<div class="search_panel_content d-flex">
					<form action="#">
						<input type="text" class="search_input" placeholder="Search" required="required">
					</form>
				</div>
			</div>
		</div>
	</header>
	
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/register.png)"></div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="billing checkout_section">
			<div class="section_title">User Information</div>
			<div class="checkout_form_container">
				<form method="POST" action="index2.php">
					
					<div>
						<label for="name">Name : </label>
					</div>
					<div>
						<label for="checkout_company">Company : </label>
					</div>
					<div>
						<label for="checkout_address">Address : </label>
					</div>
					<div>
						<label for="checkout_city">City/Town : </label>
					</div>
					<div>
						<label for="phone">Phone no : </label>
					</div>
					<div>
						<label for="username">Username : </label>
					</div>
					<div>
						<label for="email">Email Address : </label>
					</div>
					
					<div style="padding-top: 15px;"></div>
					<div >
						<button type="submit" class="btn btn-success">Back</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex">
						<div class="footer_logo"><a href="#">Campus Accessories.</a></div>
						<div class="copyright">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Campus.com
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
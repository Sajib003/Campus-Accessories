<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
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
								<a href="index.php">Home</a>
								<ul>
									<li><a href="login.php">Product</a></li>
									<li><a href="login.php">Checkout</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</li>
							<li class="subs">
								<a href="#">Categories</a>
								<ul>
									<li><a href="login.php">Student</a></li>
									<li><a href="login.php">Official</a></li>
									<li><a href="login.php">Electronics</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
							<li class="subs">
								<a href="#">User</a>
								<ul>
									<li><a href="login.php">Login</a></li>
									<li><a href="register.php">Register</a></li>
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
			<div class="section_title">Registration</div>
			<div class="section_subtitle">Enter your info</div>
			<div class="checkout_form_container">
				<form method="POST" action="register.php" id="checkout_form" class="checkout_form">
					<?php include('errors.php'); ?>
					<div>
						<label for="name">Name*</label>
						<input type="text" name="name" class="checkout_input" required="required">
					</div>
					<div>
						<label for="checkout_company">Company</label>
						<input type="text" name="company" class="checkout_input">
					</div>
					<div>
						<label for="checkout_address">Address*</label>
						<input type="text" name="address" class="checkout_input" required="required">
					</div>
					<div>
						<label for="checkout_city">City/Town*</label>
						<select name="city" id="city" class="dropdown_item_select checkout_input" require="required">
							<option></option>
							<option value="Barisal">Barisal</option>
							<option value="Chittagong">Chittagong</option>
							<option value="Dhaka">Dhaka</option>
							<option value="Khulna">Khulna</option>
							<option value="Rajsahi">Rajsahi</option>
							<option value="Rangpur">Rangpur</option>
							<option value="Sylhet">Sylhet</option>
						</select>
					</div>
					<div>
						<label for="phone">Phone no*</label>
						<input type="phone" name="phone" class="checkout_input" required="required">
					</div>
					<div>
						<label for="username">Username (without Space)*</label>
						<input type="username" name="username" class="checkout_input" required="required" value="<?php echo $username; ?>">
					</div>
					<div>
						<label for="email">Email Address*</label>
						<input type="phone" name="email" class="checkout_input" required="required" value="<?php echo $email; ?>">
					</div>
					<div>
						<label>Password*</label>
						<input type="password" name="password" class="checkout_input" required="required">
					</div>
					<div style="padding-top: 15px;"></div>
					<div >
						<button type="submit" class="btn" name="reg_user">Register</button>
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
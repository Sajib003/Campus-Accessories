<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
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
						</ul>
					</nav>
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
			<div class="home_background" style="background-image:url(images/login.jpg)"></div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="billing checkout_section">
			<div class="section_title">Login</div>
			<div class="section_subtitle">Enter your info</div>
			<div class="checkout_form_container">
				<form method="post" action="login.php" id="checkout_form" class="checkout_form">
					<?php include('errors.php'); ?>
					<div>
						<label>Username*</label>
						<input type="phone" name="username" class="checkout_input" required="required">
					</div>
					<div>
						<label>Password*</label>
						<input type="password" name="password" class="checkout_input" required="required">
					</div>
					<div style="padding-top: 15px;"></div>
					<div >
						 <button type="submit" class="btn" name="login_admin">Login</button>
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
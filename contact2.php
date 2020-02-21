<?php
    session_start();
    include("connect.php"); 
    if(!$_SESSION['username'])  
    {  
        header("Location: login.php");  
    }  
?>

<!DOCTYPE html>
<head>
<title>Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
</head>
<body>

<div class="super_container">
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
									<li><a href="office.php">Official</a></li>
									<li><a href="electronics.php">Electronics</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
							<li class="subs">
								<a href="#">User</a>
								<ul>
									<li><a href="profile.php">Profile</a></li>
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
			<div class="home_background" style="background-image:url(images/contact.jpg)"></div>
		</div>
	</div>

	<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Get in Touch</div>
						<div class="section_subtitle">Say hello</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-xl-6">
										<label for="contact_name">First Name*</label>
										<input type="text" id="contact_name" class="contact_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<label for="contact_last_name">Last Name*</label>
										<input type="text" id="contact_last_name" class="contact_input" required="required">
									</div>
								</div>
								<div>
									<label for="contact_company">Subject</label>
									<input type="text" id="contact_company" class="contact_input">
								</div>
								<div>
									<label for="contact_textarea">Message*</label>
									<textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
								</div>
								<button class="button contact_button"><span>Send Message</span></button>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Shipping & Returns</div>
							<ul>
								<li>Phone: <span>+8801712345678</span></li>
								<li>Email: <span>sb@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Information</div>
							<ul>
								<li>Phone: <span>+8801712345678</span></li>
								<li>Email: <span>sb@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>
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
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
</body>
</html>
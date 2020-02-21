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
<title>Product</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/product.css">
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
								<a href="index.php">Home</a>
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
			<div class="home_background" style="background-image:url(images/categories.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Product Details<span>.</span></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="images/product/CANON_IP2772.jpg" alt=""><div class="product_extra product_new"><a href="categories.php">New</a></div></div>
						
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name">CANON IP2772</div>
						<div class="details_discount">$4500</div>
						<div class="details_price">$4000</div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="button cart_button"><a href="#">Add to cart</a></div>
						</div>
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
						<div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
					</div>
					<div class="description_text">
						<p>Print Speed (Color):	4.8 ipm<br>
						Print Speed (Black):	7.0 ipm<br>
						Print Resolution (Black):	4800 x 1200dpi (max.) resolution<br>
						Print Resolution (Color):	4800 x 1200dpi (max.) resolution<br>
						Paper Sizes:	A4, Letter, Legal, A5, B5, Envelopes<br>
						Connectivity:	Interface USB 2.0 Hi-Speed<br>
						Warranty:	1 Year Warranty</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="products_title">Related Products</div>
				</div>
			</div>
			
				<div class="col">
					
					<div class="product_grid">

						<!-- Product -->
						<div class="product">
								<div class="product_image"><img src="images/product/FX991ESPLUS.jpg" alt=""></div>
								<div class="product_extra product_new"><a href="categories.php">New</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">FX991 ES PLUS</a></div>
									<div class="product_price">$1300</div>
								</div>
							</div>

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product/fx100MS.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">FX 100MS</a></div>
									<div class="product_price">$700</div>
								</div>
							</div>

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product/CANON_IP2772.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">IP2772</a></div>
									<div class="product_price">$4000</div>
								</div>
							</div>

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product/LiDE_120_Scanner.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php"> Canon LiDE 120 Scanner</a></div>
									<div class="product_price">$5999</div>
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
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
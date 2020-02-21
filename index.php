<!DOCTYPE html>
<head>
<title>Campus Accessories</title>
<link rel="stylesheet" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" href="styles/main_styles.css">
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
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Shop everything for study from your home.</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_2.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Home Slider Dots -->
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="home_slider_dots">
						<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
							<li class="home_slider_custom_dot active">01.</li>
							<li class="home_slider_custom_dot">02.</li>
						</ul>
					</div>		
				</div>	
			</div>
		</div>
	</div>

	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(images/official.jpg)"></div>
				<div class="avds_small_inner">
					
					<div class="avds_small_content">
						<div class="avds_title">Official Product</div>
						<div class="avds_link"><a href="office.php">See More</a></div>
					</div>
				</div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url(images/avds_large.jpg)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Electronics Product</div>
						<div class="avds_text">Electronics product are here.</div>
						<div class="avds_link avds_link_large"><a href="electronics.php">See More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">
							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product/FX991ESPLUS.jpg" alt=""></div>
								<div class="product_extra product_new"><a href="#">New</a></div>
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

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product/Classic_Chair.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Classic Chair</a></div>
								<div class="product_price">$1480</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product/File_Rack.jpg" alt=""></div>
							<div class="product_extra product_hot"><a href="#">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">File Rack</a></div>
								<div class="product_price">$900</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product/Punch_Machine.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Punch Machine</a></div>
								<div class="product_price">$229</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product/Office_Table.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="#">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Office Table</a></div>
								<div class="product_price">$18500</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product/A4ColorPaper.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="#">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">70 GSM A4 Size Colored Paper - 500 Sheet</a></div>
								<div class="product_price">$419</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product/Bashundhara_A4.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="#">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Bashundhara A4 Paper 80 GSM 500 Sheets</a></div>
								<div class="product_price">$300</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product/White_Board_Marker.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="#">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">FABER CASTELL White Board Marker</a></div>
								<div class="product_price">$230</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product/Sketch_notebook.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="#">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Sketch notebook</a></div>
								<div class="product_price">$229</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Free Shipping</div>
						<div class="icon_box_text">
							<p>No shiping charge.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Free Returns</div>
						<div class="icon_box_text">
							<p>Return the product free.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">Fast Support</div>
						<div class="icon_box_text">
							<p>Fast Communacation.</p>
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


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
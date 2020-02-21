<?php
    session_start();
    include("connect.php"); 
    if(!$_SESSION['username'])  
    {  
        header("Location: login.php");  
    }  
?>

<?php
	$conn = mysqli_connect("localhost", "root", "", "ca");
	//if button with the name uploadfilesub has been clicked
	
	if(isset($_POST['uploadfilesub'])) {
		//declaring variables
		$filename = $_FILES['uploadfile']['name'];
		$filetmpname = $_FILES['uploadfile']['tmp_name'];
		$catagory=mysqli_real_escape_string($conn, $_POST['catagory']);
		$product_key = mysqli_real_escape_string($conn, $_POST['product_key']);
		$pname = mysqli_real_escape_string($conn, $_POST['pname']);
		$details=mysqli_real_escape_string($conn, $_POST['details']);
		$price=mysqli_real_escape_string($conn, $_POST['price']);
		

		//folder where images will be uploaded
		$folder = 'images/product/';
		//function for saving the uploaded images in a specific folder
		move_uploaded_file($filetmpname, $folder.$filename);
		//inserting image details (ie image name) in the database
		$sql = "INSERT INTO product (image,catagory,product_key, pname,details,price)  VALUES ('$filename','$catagory','$product_key','$pname','$details','$price')";
		$qry = mysqli_query($conn,  $sql);
	}
?>

<!DOCTYPE html>
<head>
<title>Campus Accessories</title>
<link rel="stylesheet" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
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
							<li class="subs">
								<a href="#">User</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

		<div class="checkout_form_container">
			<div style="margin-left: 500px; margin-top: 150px;">
		  <form action="" method="post" enctype="multipart/form-data" id="checkout_form" class="checkout_form">
		  	<div>
		  		<input type="file" name="uploadfile" />
		  	</div>
			<div>
				<select name="catagory" id="catagory" require="required">
					<option>Catagory</option>
					<option value="Electronics">Electronics</option>
					<option value="Official">Official</option>
					<option value="Student">Student</option>
				</select>
			</div>
			<div>
				<input type="text" name="product_key" placeholder="Product Key" />
			</div>
			<div>
				<input type="text" name="pname" placeholder="Product Name"/>
			</div>
			<div>
		      <textarea 
		      	id="text" 
		      	cols="20" 
		      	rows="4" 
		      	name="details" 
		      	placeholder="Details"></textarea>
		  	</div>
			<div>
				<input type="number" name="price" placeholder="Price"/>
			</div>
			<input type="submit" name="uploadfilesub" value="upload" />
		  </form>
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
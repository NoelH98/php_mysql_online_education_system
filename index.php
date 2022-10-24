<!DOCTYPE html>
<html lang="en">
<head>
<title>Deba</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="css/css.css" rel="stylesheet" type="text/css" />
<style>
.dropbtn{
	background-color:white;
	color:black
	padding:2px;
	font-size:18px;
	border:none;
}
.dropdown{
	position:relative;
	display:inline-block;
}
.dropdown-content{
	display:none;
	position:absolute;
	background-color:#f1f1f1;
	min-width:160px;
	box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index:1;
}
.dropdown-content a{
	color:black;
	padding:6px 12px;
	text-decoration:none;
	display:block;
}
.dropdown-content a:hover{background-color:#00d3ff;}
.dropdown:hover .dropdown-content{display:block;}
.dropdown:hover .dropbtn{background-color:white;}
</style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
	
		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
						 <div class="event_image"><img src="images/marker.png" alt="Logo"></div>
						</div>
							<div class="logo_container">
								<a href="admin/index.php">
									<div class="logo_text">Deba<span>Solutions Kenya</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
								<li><a href="index.php">Home</a></li>
									<div class="dropdown">
									<button class="dropbtn">Company</button>
									<div class="dropdown-content">
									   <a href="about.html">About us</a>
									   <a href="team.html">Team</a>
									   <a href="partners.html">Partners</a>
									   <a href="#">Blogs</a>
									</div>
									</div>
									<li><a href="courses.html">  </a></li>
									<li><a href="workshop.php">Workshops</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="card.html">Register</a></li>
									<li><a href="contact.html">Contact us</a></li>
								</ul>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		
	</header>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/a.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Welcome to Deba Solutions.</div>
									<div class="home_slider_subtitle">Company motto:</div>
									<div class="home_slider_form_container">
										<form action="about.html" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<button type="submit" class="home_search_button">Learn More</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/b.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Register with us to learn financial literacy and Entrepreneurship</div>
									<div class="home_slider_form_container">
										<form action="about.html" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<button type="submit" class="home_search_button">Learn More</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/a.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Get Started today!</div>
									<div class="home_slider_form_container">
										<form action="user/reg.php" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
										<button type="submit" class="home_search_button">Register</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>
	
	
<!-- Footer -->

	<div class="footer-bottom">
     <div class="container">
          <div class="row">
		     <div class="col-sm-6">
			   <div class="copyright-text">
			   <p>CopyRight &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<i>Deba Solutions</i>
               </div>
			  </div>
            <div class="col-sm-6"> 
			<ul class="social-link pull-right">
			    <i>Powered by ..... Designed By Colorlib</i>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>							
			</ul>
		  </div>
		</div>
	</div>
</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
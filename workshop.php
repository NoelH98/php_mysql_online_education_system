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
<div id="main">
<div class="margin">
<div id="pagination"><!-- #pagination start -->

<?php
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'debasystem');


//////FIRST WE SET UP THE TOTAL images PER PAGE & CALCULATIONS:
$per_page = 3;// Number of images per page, change for a different number of images per page

// Get the page and offset value:
if (isset($_GET['page'])) {
$page = $_GET['page'] - 1;
$offset = $page * $per_page;
}
else {
$page = 0;
$offset = 0;
} 

// Count the total number of images in the table ordering by their id's ascending:
$images = "SELECT count(id) FROM gallery ORDER by id ASC";
$result = mysqli_query($db, $images);
$row = mysqli_fetch_array($result);
$total_images = $row[0];

// Calculate the number of pages:
if ($total_images > $per_page) {//If there is more than one page
$pages_total = ceil($total_images / $per_page);
$page_up = $page + 2;
$page_down = $page;
$display ='';//leave the display variable empty so it doesn't hide anything
} 
else {//Else if there is only one page
$pages = 1;
$pages_total = 1;
$display = ' class="display-none"';//class to hide page count and buttons if only one page
} 

////// THEN WE DISPLAY THE PAGE COUNT AND BUTTONS:

echo '<h2'.$display.'>Page '; echo $page + 1 .' of '.$pages_total.'</h2>';//Page out of total pages

$i = 1;//Set the $i counting variable to 1

echo '<div id="pageNav"'.$display.'>';//our $display variable will do nothing if more than one page

// Show the page buttons:
if ($page) {
echo '<a href="gallery.php"><button><<</button></a>';//Button for first page [<<]
echo '<a href="gallery.php?page='.$page_down.'"><button><</button></a>';//Button for previous page [<]
} 

for ($i=1;$i<=$pages_total;$i++) {
if(($i==$page+1)) {
echo '<a href="gallery.php?page='.$i.'"><button class="active">'.$i.'</button></a>';//Button for active page, underlined using 'active' class
}

//In this next if statement, calculate how many buttons you'd like to show. You can remove to show only the active button and first, prev, next and last buttons:
if(($i!=$page+1)&&($i<=$page+3)&&($i>=$page-1)) {//This is set for two below and two above the current page
echo '<a href="gallery.php?page='.$i.'"><button>'.$i.'</button></a>'; }
} 

if (($page + 1) != $pages_total) {
echo '<a href="gallery.php?page='.$page_up.'"><button>></button></a>';//Button for next page [>]
echo '<a href="gallery.php?page='.$pages_total.'"><button>>></button></a>';//Button for last page [>>]
}
echo "</div>";// #pageNav end

echo '<div id="gallery">';// Gallery start

// DISPLAY THE images:
//Select the images from the table limited as per our $offet and $per_page total:
$result = mysqli_query($db, "SELECT * FROM gallery ORDER by id ASC LIMIT $offset, $per_page");
while($row = mysqli_fetch_array($result)) {//Open the while array loop

//Define the image variable:
$image=$row['title'];
$date=$row['date'];
$description=$row['description'];

echo '<div class="img-container">';
echo '<div class="img">';

echo '<a href="workshop/'.$image.'">';
echo '<img src="workshop/'.$image.'">';
echo '</a>';

echo '</div>';
echo '</div>';// .img-container end
}   //Close the while array loop

echo '</div>';// Gallery end

echo '<div class="clearfix"></div>';// Gallery end

?>

</div>
</div>

</div><!-- #main end -->
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
</body>
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
</html>
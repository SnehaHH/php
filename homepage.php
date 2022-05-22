<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SCRIBO</title>
	<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="vendors/aos/css/aos.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="mobile-menu-overlay"></div>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<h2 class="scribo-text"> SCRIBO </h2>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
					<img src="images/logo-dark.svg" class="logo-mobile-menu" alt="logo">
					<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
				</div>
				<ul class="navbar-nav ml-auto align-items-center">
					<li class="nav-item active">
						<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="languages.php">Languages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">FAQs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#projects">Blogs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#testimonial">Testimonials</a>
					</li>

					<?php
					if (isset($_SESSION["name"])) {
						echo ('<li class="nav-item">
							
								<a class="nav-link" href="Logout.php"> &nbsp LOGOUT</a>
								
							</li>');
					} else {
						echo ('<li class="nav-item">
								<a class="nav-link" href="Login.php">Login/SignUp</a>
							</li>');
					}
					?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page-body-wrapper">
		<section id="home" class="home">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="main-banner">
							<div class="d-sm-flex justify-content-between">
								<div data-aos="zoom-in-up">
									<div class="banner-title">
										<h3 class="font-weight-medium">
											<?php
											if (isset($_SESSION["name"])) {
												echo ('WELCOME <br>' . $_SESSION["name"] . "!<br>");
											} else {
												echo ('WELCOME STRANGER!<br>');
											}
											?>

										</h3>
									</div>
									<p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.

										<br>
										Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
									</p>
									<a href="#" class="btn btn-secondary mt-3">Learn more</a>
								</div>
								<div class="mt-5 mt-lg-0">
									<img src="images/World-Map-PNG.png" alt="marsmello" class="img-fluid" data-aos="zoom-in-up" height="550" width="550">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="our-process" id="about">
			<div class="container">
				<div class="row">
					<div class="col-sm-6" data-aos="fade-up">
						<h5 class="text-dark">Our work process</h5>
						<h3 class="font-weight-medium text-dark">Discover New Idea With Us!</h3>
						<h5 class="text-dark mb-3">Imagination will take us everywhere</h5>
						<p class="font-weight-medium mb-4">Lorem ipsum dolor sit amet, <br>
							pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur
						</p>
						<div class="d-flex justify-content-start mb-3">
							<img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
							<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
						</div>
						<div class="d-flex justify-content-start mb-3">
							<img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
							<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
						</div>
						<div class="d-flex justify-content-start">
							<img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
							<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
						</div>
					</div>
					<div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
						<img src="images/idea.png" alt="idea" class="img-fluid">
					</div>
				</div>
			</div>
		</section>

		<section class="testimonial" id="testimonial">
			<div class="container">
				<div class="row  mt-md-0 mt-lg-4">
					<div class="col-sm-6 text-white" data-aos="fade-up">
						<p class="font-weight-bold mb-3">Testimonials</p>
						<h3 class="font-weight-medium">Our customers are our <br>biggest fans</h3>

					</div>

				</div>
			</div>
		</section>


		<section class="contactus" id="contact">
			<div class="container">
				<div class="row mb-5 pb-5">
					<div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
						<img src="images/contact.jpg" alt="contact" class="img-fluid">
					</div>
					<div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
						<h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Got A Problem</h3>
						<h5 class="text-dark mb-5">Lorem ipsum dolor sit amet, consectetur pretium</h5>
						<form>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="Name*">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<input type="email" class="form-control" id="mail" placeholder="Email*">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" placeholder="Message*" rows="5"></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<a href="#" class="btn btn-secondary">SEND</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer class="footer">
		<div class="footer-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<div class="d-flex align-items-center">
						<h3 class="scribo-text"> SCRIBO </h3>
						<p class="mb-0 text-small pt-1"><span class="mx-5">© 2022-2023 All rights reserved.</span></p>
					</div>
					<div>
						<div class="d-flex">
							<a href="#" class="text-small text-white mx-2 footer-link">Privacy Policy </a>
							<a href="#" class="text-small text-white mx-2 footer-link">Customer Support </a>
							<a href="#" class="text-small text-white mx-2 footer-link">Careers </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="vendors/base/vendor.bundle.base.js"></script>
	<script src="vendors/owl.carousel/js/owl.carousel.js"></script>
	<script src="vendors/aos/js/aos.js"></script>
	<script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
	<script src="js/template.js"></script>
</body>


</html>
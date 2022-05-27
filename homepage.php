<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SCRIBO</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
					<h2><b> SCRIBO </b></h2>
					<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
				</div>
				<ul class="navbar-nav ml-auto align-items-center">
					<li class="nav-item active">
						<a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="languages.php">Languages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="faq.php">FAQs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blogs.php">Blogs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="testimonial.php">Testimonials</a>
					</li>

					<?php
					if (isset($_SESSION["name"])) {
						echo ('<li class="nav-item">
							
						<a class="nav-link" href="checkout.php">  Cart</a>

						</li>
                        <li class="nav-item">');
						if ($_SESSION['admin'] == 0)

							echo '<a class="nav-link" href="Dashboard/student_dashboard.php">Dashboard</a>';
						else {
							echo '<a class="nav-link" href="Dashboard/admin_dashboard.php">Dashboard</a>';
						}

						echo ('</li>
						<li class="nav-item">
							
								<a class="nav-link" href="Logout.php"> Logout</a>
								
							</li>
							');
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
									<p class="mt-3">
										Are you looking for a productive new hobby to forget the stress of your career?
										<br> Are you a student looking to explore the world by studying in a different country?
										<br> Are you interested in traveling the globe and interacting with multiple cultures?
										<br><br>
										Learning a new language is the key to unlocking all your expectations!

									</p>

								</div>
								<div class="mt-5 mt-lg-0">
									<img src="images/World-Map-PNG.png" alt="marsmello" class="img-fluid" data-aos="zoom-in-up" height="500" width="500">
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
					<div data-aos="fade-up">
						<div class="d-flex justify-content-start mb-3" style="text-align:justify">
							<p class="mb-0">The benefits of learning new languages are infinite. Studies say that people who are bi- or multilingual use a more significant portion of their brain for communication as opposed to monolinguistic speakers. Another study conducted in over 15 of the world's leading MNCs shows that employees fluent in multiple foreign languages have more opportunities to be promoted to leadership roles across the globe. A new language deems to be exceptionally useful for students, not only as an extracurricular interest on their CV but also gives them a better chance to experience international education at some of the world's best universities.
								Join us at Scribo today and experience international standard education in a language of your choice in a course specially customized to suit the needs of our student population. We have highly qualified teachers, the latest teaching methods, intensive mentoring and advice, and a course-level system that is internationally valid.
								<br><br><b>Powered by The Learner Train.</b>

							</p> <br>
						</div>
					</div>

				</div>
			</div>
		</section>


		<section class="our-process" id="about">
			<div class="container">
				<div class="row">
					<div class="col-sm-6" data-aos="fade-up" style="text-align:justify">

						<h3 class="font-weight-medium text-dark">WHY SCRIBO?</h3> <br>
						<div class="d-flex justify-content-start mb-3">
							<i class="bi-caret-right"></i>
							<span class="mb-0"><b>Learn from experts </b><br>
								Learn from linguists from across the globe trained to an international standard specialized in multilingual education
							</span><br>
						</div>
						<div class="d-flex justify-content-start mb-3">
							<i class="bi-caret-right"></i>
							<span class="mb-0"><b>Practice round the clock </b><br>
								Get in touch with our instructors for one-on-one doubt clarification during the course.
							</span><br>
						</div>
						<div class="d-flex justify-content-start">
							<i class="bi-caret-right"></i>
							<span class="mb-0"><b>Unlock exclusive features with every course </b><br>
								Get a multipurpose virtual keyboard for the language you are learning for free with every purchase and your student dashboard to check your progress.
							</span> <br>
						</div>
					</div>
					<div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
						<img src="images/comma.jpg" alt="idea" class="img-fluid">
					</div>
				</div>
			</div>
		</section>

		<section class="testimonial" id="testimonial">
			<div class="container">
				<div class="row  mt-md-0 mt-lg-4">
					<div class="text-white" data-aos="fade-up">
						<h3 class="font-weight-medium">OUR ACTIVE LEARNING METHODS</h3><br>
						<p class="font-weight-bold mb-3" style="text-align:justify">Scribo's language courses are held to the highest standards thanks to continuous development and systematic quality management. This is especially noticeable among our teaching staff. They are specially trained to teach foreign languages and receive ongoing training to keep their methods up to date. <br>
							Scribo is an online language school that provides courses to learn languages from across the world from global language experts. At Scribo, we believe that the key to mastering a language goes beyond the rules and grammar and semantics to intuition and spontaneity. Our courses are designed by a team of expert polyglots who cater to the niche interests of a diverse group of learners. Our curriculum is based on the concept of a transdisciplinary approach to education.
						</p><br>
						<a class="btn btn-outline-warning" href="Career.php">Come be part of the team!</a>
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
						<h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Contact Us</h3>
						<h5 class="text-dark mb-5">For any further queries, please feel free to reach out to us!</h5>
						<form method="post" action="homepage.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Name*" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<input type="email" class="form-control" name="mail" placeholder="Email*" required>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<textarea name="message" name="message" class="form-control" placeholder="Message*" rows="5" required></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<button class="btn btn-secondary" type="submit" name="submit">SEND</button>
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
	<?php
	if (isset($_POST["submit"])) {
		$name = $_POST["name"];
		$email = $_POST["mail"];
		$msg = $_POST["message"];
		$query = "INSERT INTO feedback_form (FullName, Email, Message, SubmitTime) 
									VALUES ('$name','$email','$msg',CURRENT_TIMESTAMP)";
		$result = mysqli_query($conn, $query);
		if ($result) {
			echo '<script>
										alert("Thank you for your feedback!");
									</script>';
			$name = $email = $msg = "";
		} else {
			echo '<script>
										alert(' . "mysqli_error($conn)" . ');
									</script>';
		}
	}

	?>
</body>


</html>
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
    <title>Blogs</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/aos/css/aos.css">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
        rel="stylesheet"
    />
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
					<li class="nav-item ">
						<a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="languages.php">Languages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="faq.php">FAQs</a>
					</li>
					<li class="nav-item active">
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
    <section id="home" class="home" style="background-position: 0-260px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-banner">
                        <div class="d-sm-flex justify-content-between">
                            <div>
                                <h1 class="scribo-text">Blogs</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card w-100" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="lead story" style="height: 350px">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-small text-muted">Genre</h6>
                                    <h5 class="card-title">Title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h3>Staff picks</h3>
                            <ul class="list-group">
                                <li class="list-group-item"> <div><p style="color: teal">Genre</p><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ut.</h5></div></li>
                                <li class="list-group-item"><div><p style="color: teal">Genre</p><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ut.</h5></div></li>
                                <li class="list-group-item"><div><p style="color: teal">Genre</p><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ut.</h5></div></li>
                                <li class="list-group-item"><div><p style="color: teal">Genre</p><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ut.</h5></div></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-4">
                            <div class="card w-100" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="lead story" style="height: 300px">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-small text-muted">Genre</h6>
                                    <h5 class="card-title">Title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card w-100" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="lead story" style="height: 300px">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-small text-muted">Genre</h6>
                                    <h5 class="card-title">Title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card w-100" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="lead story" style="height: 300px">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-small text-muted">Genre</h6>
                                    <h5 class="card-title">Title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 150px">

        </div>
        <footer class="footer mt-5">
            <div class="footer-bottom">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <h3 class="scribo-text"> SCRIBO </h3>
                            <p class="mb-0 text-small pt-1"><span class="mx-5">© 2022-2023 All rights reserved.</span></p>
                        </div>
                        <div>
                            <div class="d-flex">
                                <a href="#" class="text-small text-white mx-2 footer-link">Careers </a>
                                <a href="#" class="text-small text-white mx-2 footer-link">Terms and Conditions </a>
                                <a href="#" class="text-small text-white mx-2 footer-link">Privacy Policy </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
        <script src="vendors/base/vendor.bundle.base.js"></script>


</body>

</html>
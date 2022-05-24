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
    <title>French</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/aos/css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="snackbar"></div>
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
							
								<a class="nav-link" href="Logout.php"> LOGOUT</a>
								
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

        <div class="container">
            <div class="row">


                <div class="container-fluid" style="margin-top: 100px">
                    <div class="row mt-5">

                        <div class="col-sm-6">
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima,
                                nam! Neque, tenetur voluptates! Dicta cupiditate nobis sed est
                                veritatis doloremque aspernatur sapiente, natus corporis enim
                                suscipit labore, consequuntur adipisci ipsa?
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
                                voluptate hic deserunt facere ipsam accusantium debitis quo modi eum
                                cumque recusandae perspiciatis quam eveniet voluptas quasi, natus
                                aspernatur possimus soluta.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/german.jpg">
                        </div>

                    </div>
                </div>
                <div class="container" id="body">
                    <div class="row mt-5">
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title"><?php $query = "SELECT Course_name from courses WHERE Level = 'A1' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Course_name'];
                                            break;
                                        }  ?> </h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional
                                        content.
                                        <?php $query = "SELECT Price from courses WHERE Level = 'A1' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<br> <b>Rs. ".$row['Price']."</b></br>";
                                            break;
                                        }  ?>
                                    </p>
                                    <button type="button" class="btn btn-primary" id="1"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title"><?php $query = "SELECT Course_name from courses WHERE Level = 'A2' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Course_name'];
                                            break;
                                        }  ?> </h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional
                                        content.
                                        <?php $query = "SELECT Price from courses WHERE Level = 'A2' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<br> <b>Rs. ".$row['Price']."</b></br>";
                                            break;
                                        }  ?>
                                    </p>
                                    <button type="button" class="btn btn-primary" id="2"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title"><?php $query = "SELECT Course_name from courses WHERE Level = 'B1' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Course_name'];
                                            break;
                                        }  ?> </h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional
                                        content.
                                        <?php $query = "SELECT Price from courses WHERE Level = 'B1' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<br> <b>Rs. ".$row['Price']."</b></br>";
                                            break;
                                        }  ?>
                                    </p>
                                    <button type="button" class="btn btn-primary"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title"><?php $query = "SELECT Course_name from courses WHERE Level = 'C1' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Course_name'];
                                            break;
                                        }  ?> </h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional
                                        content.
                                        <?php $query = "SELECT Price from courses WHERE Level = 'C1' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<br> <b>Rs. ".$row['Price']."</b></br>";
                                            break;
                                        }  ?>
                                    </p>
                                    <button type="button" class="btn btn-primary"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title"><?php $query = "SELECT Course_name from courses WHERE Level = 'C2' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Course_name'];
                                            break;
                                        }  ?> </h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional
                                        content.
                                        <?php $query = "SELECT Price from courses WHERE Level = 'C2' AND Language='French'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<br> <b>Rs. ".$row['Price']."</b></br>";
                                            break;
                                        }  ?>
                                    </p>
                                    <button type="button" class="btn btn-primary"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional
                                        content.
                                    </p>
                                    <button type="button" class="btn btn-primary"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer" style ="margin-top:50px">
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
    <script src="vendors/base/vendor.bundle.base.js"></script>
	<script src="vendors/owl.carousel/js/owl.carousel.js"></script>
	<script src="vendors/aos/js/aos.js"></script>
	<script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
	<script src="js/template.js"></script>
    <script>
        <?php

        if (isset($_SESSION['userid']))
            echo "var uid =" . $_SESSION['userid'];
        else
            echo "var uid = null";
        ?>

        function snackBar(message) {
            var x = document.getElementById("snackbar");
            x.innerText = message;
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 2000);
        }

        function addtocart(e) {
            if (e.target.tagName === "BUTTON") {
                if (uid == null) {
                    snackBar("You are not logged in.");
                    return;
                }
                var id = e.target.id;
                fetch("/cart.php?userid=" + uid + "&courseid=" + id).then((resp) => {
                    if (resp.status === 200) {
                        console.log(resp);
                        snackBar("Successfully added to cart");
                    } else {
                        snackBar("You already own this course");
                    }
                })

            }
        }

        document.getElementById("body").addEventListener("click", addtocart);
    </script>
</body>

</html>
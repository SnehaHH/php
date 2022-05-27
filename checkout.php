<?php
session_start();
$id = $_SESSION["userid"];
include("connection.php");
$query =
    "SELECT
user.User_Id,
user.Email,
courses.Course_Id,
courses.Course_name,
courses.Price,
carts.user_id,
carts.course_id
FROM user
INNER JOIN carts ON user.User_Id = carts.user_id
INNER JOIN courses ON courses.Course_Id = carts.course_id
WHERE user.User_Id = '$id' ";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout</title>
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
        <section id="home" class="home" style="background-position: 0-280px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-banner">
                            <div class="d-sm-flex justify-content-between">
                                <div>
                                    <h1 style="color:white;"><b>CHECKOUT</b></h1>
                                </div>
                            </div>

                        </div>
                        <?php
                        $t = 0;
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-hover" id="check">';

                            echo "<tr>";
                            echo "<th>";
                            echo "Delete";
                            echo "</th>";
                            echo "<th>";
                            echo "Course Id";
                            echo "</th>";
                            echo "<th>";
                            echo "Course Name";
                            echo "</th>";
                            echo "<th>";
                            echo "Quantity";
                            echo "</th>";
                            echo "<th>";
                            echo "Price";
                            echo "</th>";
                            echo "</tr>";

                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<tr>";
                                echo "<td>";
                                echo "<i class='bi-dash-circle' id='". $row['course_id']."'></i>";
                                echo "</td>";
                                echo "<td>";
                                echo $row["course_id"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["Course_name"];
                                echo "</td>";
                                echo "<td>";
                                echo "1";
                                echo "</td>";
                                echo "<td>";
                                echo $row["Price"];;
                                echo "</td>";
                                echo "</tr>";
                                $t = $t + $row["Price"];
                            }
                            echo "<tr>";
                            echo "<td>";
                            echo "";
                            echo "</td>";
                            echo "<td>";
                            echo "";
                            echo "</td>";
                            echo "<td>";
                            echo "";
                            echo "</td>";
                            echo "<td>";
                            echo "<b>TOTAL</b>";
                            echo "</td>";
                            echo "<td>";
                            echo "<b>" . $t . "</b>";
                            echo "</td>";
                            echo "</tr>";
                            echo "</table><br>";


                            echo '<div class="d-flex w-67 tomove">
                        <button class="btn btn-primary ml-auto" id="submit" type="button" data-toggle="modal" data-target="#exampleModal">BUY</button>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">CONFIRM PAYMENT</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <b> Confirm payment of Rs. ' . $t .'</b>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" id="redirect">Confirm</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Go Back</button>
                                </div>
                            </div>
                        </div>
                    </div>';
                        } else {
                            echo (" <h2 class='mt-5'><b> Cart is empty. </h2></b>");
                        }
                        ?>


                    </div>
                </div>
            </div>
    </div>
    </section>
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
					</div>
				</div>
			</div>
		</div>
	</footer>
    <style>
        .tomove {
            width: 90%;
        }

        .modal {
            position: absolute;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>

        function delete_course(e)
        {
            var cid=e.target.id;
            fetch("deletecartitem.php?cid="+cid).then(()=>{
                location.reload();   
            })
        }
        function finalpay(e) {
            window.location.replace("payments.php");
        }

        document.getElementById("redirect").addEventListener("click", finalpay);
        document.getElementById("check").addEventListener("click", delete_course);
    </script>
</body>

</html>
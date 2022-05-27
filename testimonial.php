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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Testimonials</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <li class="nav-item">
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
                    <li class="nav-item active">
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
                                    <h1 style="color:white;"><b>TESTIMONIALS</b></h1>
                                </div>
                            </div>

                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="card-deck">
                                    <div class="card">
                                        <img class="card-img-top" src="images/ram.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Dr Ramachandran <br>
                                                    Academic Team, Scribo</b>
                                            </h5>
                                            <p class="card-text">Hobbies and interests are often painted to be monopolized by childhood. While we carry forward many hobbies as children, it is never too late to learn something new. Here at Scribo, we cater to the niche requirements of a diverse learning community. We bring together the ideas of world-class education in languages without the constraints of learning for only a standardized examination. We hope our endeavors to improve language learning benefit you. </p>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top" src="images/pink.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Dr Sharada Patel <br>
                                                    Academic Team, Scribo </b>
                                            </h5>
                                            <p class="card-text">There is no experience more insightful and memorable than a warm and comfortable conversation. There is an undeniable euphoria hidden in humanity’s ability to communicate with each other. It seems almost sinful not to explore this pinnacle of creativity in greater detail. We hope that our efforts at Scribo help you fall as head over heels over languages as us.</p>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top" src="images/smile.png" alt="Card image cap" height="300">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Mark Yerger <br>
                                                    Academic Team, Scribo </b>
                                            </h5>
                                            <p class="card-text">Languages are plenty. No language is like another, each having their own nuances and specifics. Learning one language by continuously translating it to our first language looses the uniqueness of the new languages. Here at Scribo, we remove the comparison and translation out of learning a new language. Allow yourself to experience the wonder of language learning with us!</p>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card w-100 my-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Parul Rao <br>
                                                Academic team, Scribo </b>
                                        </h5>
                                        <p class="card-text">Learn outside the confines of a daily class schedule. Pace your learning according to your needs and make the best of your language learning experience with us at Scribo. Take each module differently, revisit content at any time and explore an idea till convinced. Enjoy learning with us at Scribo!</p>
                                    </div>
                                </div>

                                <div class="card w-100 my-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Olivia Hern <br>
                                                Academic team, Scribo </b>
                                        </h5>
                                        <p class="card-text">Take language beyond textbooks and endless grammar exercises. Explore multiple learning methods with our transdisciplinary approach to teaching. We believe that learning language cannot be confined to a book, which is why we have a careful combination of audio, films, interviews and live sessions with the speakers of the language. Join us today and be part of the most engaging language learning platform!</p>

                                    </div>
                                </div>
                                <div class="card w-100 my-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Akshaya Suresh <br>
                                                Academic team, Scribo </b>
                                        </h5>
                                        <p class="card-text">Learning languages can be a very interesting process while learning more than one language at once. To highlight and appreciate the similarities and differences between languages by joining courses at Scribo today!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
</body>

</html>
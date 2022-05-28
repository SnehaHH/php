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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
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
                                    <img src="images/lin.png" class="card-img-top" alt="lead story" style="height: 350px">
                                    <div class="card-body">

                                        <h5 class="card-title">All Things Linguistic</h5>
                                        <p class="card-text">The Twitter Account That Collects Awkward, Amusing Writing</p>
                                        <a href="https://allthingslinguistic.com/" class="btn btn-primary">Take me there</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h2><b>Best reads of the month</h2></b>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div><a href="https://beingmultilingual.blogspot.com/">
                                                <h5 style="color: teal">Being Multilingual</h5>
                                            </a>
                                            <h5>Multilingual 'deficiencies' or assessment deficiencies?</h5>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div><a href="https://ouicestcadotcom.wordpress.com/">
                                                <h5 style="color: teal">Oui C'est ça! </h5>
                                            </a>
                                            <h5>BD du jour: La famille</h5>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div><a href="https://www.greece-is.com/">
                                                <h5 style="color: teal">Greek is! </h5>
                                            </a>
                                            <h5>With new places opening every day in the Greek capital, it’s soothing to hang out in old places with a rich history and authentic decor.</h5>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="images/mastery.jpg" class="card-img-top" alt="lead story" style="height: 300px">
                                    <div class="card-body">
                                        <h5 class="card-title">Language Mastery</h5>
                                        <p class="card-text">Can’t move to Japan? Don’t have time or money for classes? No problem!</p>
                                        <a href="https://languagemastery.com/" class="btn btn-primary">Take me there</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="images/msn.png" class="card-img-top" alt="lead story" style="height: 300px">
                                    <div class="card-body">
                                        <h5 class="card-title">Language Learning Made Simple</h5>
                                        <p class="card-text">With StoryLearning, you can learn languages quickly — through stories, not rules.</p>
                                        <a href="https://storylearning.com/" class="btn btn-primary">Take me there</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="images/emp.jpg" class="card-img-top" alt="lead story" style="height: 300px">
                                    <div class="card-body">
                                        <h5 class="card-title">Beauty Insider</h5>
                                        <p class="card-text">Пробуем новинки: гель для душа от Сергея Острикова и бюджетная тушь</p>
                                        <a href="https://www.beautyinsider.ru/" class="btn btn-primary">Take me there</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 150px">

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
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
            <script src="vendors/base/vendor.bundle.base.js"></script>


</body>

</html>
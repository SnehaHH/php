<?php

include("Career_form.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Languages & Courses</title>
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
                    <li class="nav-item active">
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
                                    <h1 class="scribo-text">Careers </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row">
                    <div class="col-sm-6 offset-3">
                        <form name="career_form" method="post">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input value="<?php if (!$name_error) {
                                                    echo $name1;
                                                } ?>" type="text" name="name" class="form-control form-control-md" required>
                                <small> <?php echo $name_error; ?> </small>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input value="<?php if (!$phone_error) {
                                                    echo $phone1;
                                                } ?>" type="text" name="phone" class="form-control form-control-md" required>
                                <small> <?php echo $phone_error; ?> </small>
                            </div>
                            <div class="form-group">
                                <label>Language</label>
                                <select name="language" class="form-control form-control-md" required>
                                    <option value="">None</option>
                                    <option value="English">English</option>
                                    <option value="French">French</option>
                                    <option value="German">German</option>
                                    <option value="Greek">Greek</option>
                                    <option value="Morse">Morse Code</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Sigh">Sign language</option>
                                    <option value="Other">Other</option>
                                </select>
                                <small> <?php echo $lang_error; ?> </small>
                            </div>
                            <div class="form-group">
                                <label>Highest Language Qualification</label>
                                <input value="<?php if (!$qua_error) {
                                                    echo $qua;
                                                } ?>" type="text" name="quali" class="form-control form-control-md" required>
                                <small> <?php echo $qua_error; ?> </small>
                            </div>
                            <div class="form-group">
                                <label>Please upload your CV</label>
                                <input value="<?php if (!$cv_error) {
                                                    echo $cv;
                                                } ?>" type="file" name="cv" class="form-control form-control-md" required>
                                <small> <?php echo $cv_error; ?> </small>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit" name="add">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <h3 class="scribo-text"> SCRIBO </h3>
                            <p class="mb-0 text-small pt-1"><span class="mx-5">?? 2022-2023 All rights reserved.</span></p>
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
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
</body>

</html>
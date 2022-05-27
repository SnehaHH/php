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
    <title>FAQs</title>
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
                    <h2><b>SCRIBO</b></h2>
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
                        <a class="nav-link " href="faq.php">FAQs</a>
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
        <section id="home" class="home" style="background-position: 0-260px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-banner">
                            <div class="d-sm-flex justify-content-between">
                                <div>
                                    <h1 class="scribo-text">Frequently Asked Questions (FAQs)</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-5">
                        <div class="accordion w-100" id="basicAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#basicAccordionCollapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        1. What kind of personalised real-time support do you offer to your students?
                                    </button>
                                </h2>
                                <div id="basicAccordionCollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-mdb-parent="#basicAccordion" style="">
                                    <div class="accordion-body">
                                        Once you purchase the course, you will automatically be under the mentoring of the course instructor. Our trainers will personally be in touch with you throughout the duration of your course offering support and guidance wherever needed.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#basicAccordionCollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2.	Does the course fee include the language certifications (DELE/ DELF/ Goethe, etc) for that level? 
                                    </button>
                                </h2>
                                <div id="basicAccordionCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-mdb-parent="#basicAccordion" style="">
                                    <div class="accordion-body">
                                    No, registration for the language certification courses is not included in the course structure and price. 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#basicAccordionCollapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3.	What is your refund policy?
                                    </button>
                                </h2>
                                <div id="basicAccordionCollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-mdb-parent="#basicAccordion" style="">
                                    <div class="accordion-body">
                                    We refund 90% of the course fee (excluding taxes) if you cancel the course within 5 days of the purchase. If you cancel the course after 5 days and within one month if purchasing the course, you will receive a 50% refund (excluding taxes). No refunds will be given for cancellation of courses after one month of purchasing the course. For any such changes, please get in touch with the course instructor directly. 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#basicAccordionCollapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4.	Will you be adding more language courses?
                                    </button>
                                </h2>
                                <div id="basicAccordionCollapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-mdb-parent="#basicAccordion" style="">
                                    <div class="accordion-body">
                                    Yes, we will! The Scribo academic team is constantly working towards updating our courses. We will be rolling out multiple updates throughout the year and adding more languages soon!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#basicAccordionCollapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5.	Have any additional queries?
                                    </button>
                                </h2>
                                <div id="basicAccordionCollapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-mdb-parent="#basicAccordion" style="">
                                    <div class="accordion-body">
                                    Get in touch with us through your course instructor if you are currently a learner at Scribo, or reach us through the form on the homepage. 
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
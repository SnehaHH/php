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
    <title>Greek</title>
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
                            <p style="text-align:justify" ;>
                                <b>Greek </b>is an independent branch of the Indo-European family of languages, native to Greece, Cyprus, southern Albania, and other regions of the Balkans, the Black Sea coast, Asia Minor, and the Eastern Mediterranean. It has the longest documented history of any Indo-European language, spanning at least 3,400 years of written records. Its writing system is the Greek alphabet, which has been used for approximately 2,800 years; previously, Greek was recorded in writing systems such as Linear B and the Cypriot syllabary. The alphabet arose from the Phoenician script and was in turn the basis of the Latin, Cyrillic, Armenian, Coptic, Gothic, and many other writing systems.
                                The Greek language holds an important place in the history of the Western world. Beginning with the epics of Homer, ancient Greek literature includes many works of lasting importance in the European canon. Greek is also the language in which many of the foundational texts in science and philosophy were originally composed.
                                <a href="https://en.wikipedia.org/wiki/Greek_language"> For more.</a>
                            </p>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-center">
                        <img src="images/Greece.png" height="320" width="500">
                        </div>

                    </div>
                </div>
                <div class="container" id="body">
                    <div class="row mt-5">
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?php $query = "SELECT Course_name from courses WHERE Level = 'A1' AND Language='Greek'";
                                                                $result = mysqli_query($conn, $query);
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['Course_name'];
                                                                    break;
                                                                }  ?></b> </h5><br>
                                    <p class="card-text">
                                        Introduction to the alphabet and pronunciation of Modern Greek. You will be taught about the history and origins of Greek. This course will help you gain
                                        a strong foundation.

                                        <br> <?php $query = "SELECT Price,Course_Id from courses WHERE Level = 'A1' AND Language='Greek'";
                                                $result = mysqli_query($conn, $query);
                                                $row = mysqli_fetch_assoc($result);
                                                $cid = $row["Course_Id"];
                                                echo "<br> <b>Rs. " . $row['Price'] . "</b></br>"; ?>
                                    </p><br>
                                    <button type="button" class="btn btn-primary" id="<?php echo $cid; ?>"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?php $query = "SELECT Course_name from courses WHERE Level = 'A2' AND Language='Greek'";
                                                                $result = mysqli_query($conn, $query);
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['Course_name'];
                                                                    break;
                                                                }  ?></b> </h5><br>
                                    <p class="card-text">
                                        This course is a continuation of the Beginners 1 level, with additional vocabulary and grammar development, as well as reading and writing skill improvement.

                                        <br> <?php $query = "SELECT Price,Course_Id from courses WHERE Level = 'A2' AND Language='Greek'";
                                                $result = mysqli_query($conn, $query);
                                                $row = mysqli_fetch_assoc($result);
                                                $cid = $row["Course_Id"];
                                                echo "<br> <b>Rs. " . $row['Price'] . "</b></br>"; ?>
                                    </p><br>
                                    <button type="button" class="btn btn-primary" id="<?php echo $cid; ?>"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?php $query = "SELECT Course_name from courses WHERE Level = 'B1' AND Language='Greek'";
                                                                $result = mysqli_query($conn, $query);
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['Course_name'];
                                                                    break;
                                                                }  ?></b> </h5><br>
                                    <p class="card-text">
                                        This level will include a lot of speaking and listening exercises, as well as role plays, to ensure that all of the knowledge learned is put into practise. Classes are mostly taught in Greek, so students can get used to understanding the language.

                                        <br> <?php $query = "SELECT Price,Course_Id from courses WHERE Level = 'B1' AND Language='Greek'";
                                                $result = mysqli_query($conn, $query);
                                                $row = mysqli_fetch_assoc($result);
                                                $cid = $row["Course_Id"];
                                                echo "<br> <b>Rs. " . $row['Price'] . "</b></br>"; ?>
                                    </p><br>
                                    <button type="button" class="btn btn-primary" id="<?php echo $cid; ?>"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?php $query = "SELECT Course_name from courses WHERE Level = 'B2' AND Language='Greek'";
                                                                $result = mysqli_query($conn, $query);
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['Course_name'];
                                                                    break;
                                                                }  ?></b> </h5><br>
                                    <p class="card-text">
                                        The goal of this course is to assist you in securing and then broadening your previously acquired knowledge of the vocabulary and grammar described in previous levels.

                                        <br><br> <?php $query = "SELECT Price,Course_Id from courses WHERE Level = 'B2' AND Language='Greek'";
                                                $result = mysqli_query($conn, $query);
                                                $row = mysqli_fetch_assoc($result);
                                                $cid = $row["Course_Id"];
                                                echo "<br> <b>Rs. " . $row['Price'] . "</b></br>"; ?>
                                    </p><br>
                                    <button type="button" class="btn btn-primary" id="<?php echo $cid; ?>"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?php $query = "SELECT Course_name from courses WHERE Level = 'C1' AND Language='Greek'";
                                                                $result = mysqli_query($conn, $query);
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['Course_name'];
                                                                    break;
                                                                }  ?></b> </h5><br>
                                    <p class="card-text">
                                        This level broadens and refines your knowledge of Greek as well as your communication skills.
                                        It includes readings on politics, culture, business, and daily life, as well as literary texts, songs, and so on.


                                        <br><br> <?php $query = "SELECT Price,Course_Id from courses WHERE Level = 'C1' AND Language='Greek'";
                                                $result = mysqli_query($conn, $query);
                                                $row = mysqli_fetch_assoc($result);
                                                $cid = $row["Course_Id"];
                                                echo "<br> <b>Rs. " . $row['Price'] . "</b></br>"; ?>
                                    </p><br>
                                    <button type="button" class="btn btn-primary" id="<?php echo $cid; ?>"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?php $query = "SELECT Course_name from courses WHERE Level = 'C2' AND Language='Greek'";
                                                                $result = mysqli_query($conn, $query);
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['Course_name'];
                                                                    break;
                                                                }  ?></b> </h5><br>
                                    <p class="card-text">
                                        This course entails a close examination of Modern Greek oral and written texts of varying complexity, such as literary texts and newspaper and magazine articles. The course may also include radio broadcasts and current films.


                                        <br> <?php $query = "SELECT Price,Course_Id from courses WHERE Level = 'C2' AND Language='Greek'";
                                                $result = mysqli_query($conn, $query);
                                                $row = mysqli_fetch_assoc($result);
                                                $cid = $row["Course_Id"];
                                                echo "<br> <b>Rs. " . $row['Price'] . "</b></br>"; ?>
                                    </p><br>
                                    <button type="button" class="btn btn-primary" id="<?php echo $cid; ?>"> Add to cart! </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer" style="margin-top:50px">
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
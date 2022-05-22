<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Check out</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/aos/css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Payment</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="mobile-menu-overlay"></div>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <h2 style="color:white"> SCRIBO </h2>
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
                        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="#plans">About Us</a>
                    </li>
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
                                    <h1 style="color:white;">PAYMENT CONFIRMATION</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center w-100"> 
                        <button class="btn btn-primary mx-4" id="suc">SUCCESS</button>
                        <button class="btn btn-danger mx-5" id="fail">FAILURE</button>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <script>

        function success(e)
        {

            window.location.replace("transaction.php?success=true");
        }

        function failure(e)
        {
            window.location.replace("transaction.php?success=false");
        }


    document.getElementById("suc").addEventListener("click",success);
    document.getElementById("fail").addEventListener("click",failure);
    </script>

</body>

</html>
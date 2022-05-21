<?php
session_start();
$id=$_SESSION["userid"];
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
    <title>Check out</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/aos/css/aos.css">
    <link rel="stylesheet" href="css/style.css">

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
        <section id="home" class="home" style="background-position: 0-280px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-banner">
                            <div class="d-sm-flex justify-content-between">
                                <div>
                                    <h1 style="color:white;">CHECKOUT</h1>
                                </div>
                            </div>

                        </div>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table table-hover'>";

                            echo "<tr>";
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
                            }
                            echo "</table>";
                        } else {
                            echo ("Cart is empty.");
                        }
                        ?>

                    </div>

                </div>
            </div>
    </div>
    </section>
    </div>

</body>

</html>
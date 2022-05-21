<?php
session_start();
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
       
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-banner">
                            <div class="d-sm-flex justify-content-between">
                                <div>
                                    <h1 style="color:white;">GERMAN</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
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
                            
                        </div>
                    </div>
                    <div class="container" id="body">
                        <div class="row mt-5">
                            <div class="col-sm-6 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">
                                            With supporting text below as a natural lead-in to additional
                                            content.
                                        </p>
                                        <button type="button" class= "btn btn-primary" id="1"> Add to cart! </button>
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
                                        <button type="button" class= "btn btn-primary" id="2"> Add to cart! </button>
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
                                        <button type="button" class= "btn btn-primary"> Add to cart! </button>
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
                                        <button type="button" class= "btn btn-primary"> Add to cart! </button>
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
                                        <button type="button" class= "btn btn-primary"> Add to cart! </button>
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
                                        <button type="button" class= "btn btn-primary"> Add to cart! </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    </div>

    <script>
        <?php
        echo "var uid =". $_SESSION['userid'];
        ?>
           

    function addtocart(e)

    {
        if (e.target.tagName === "BUTTON") {
            var id=e.target.id;
            fetch("/cart.php?userid="+uid+"&courseid="+id).then((resp)=>{
                console.log(resp);
            })

        }
    }

    document.getElementById("body").addEventListener("click", addtocart);

</script>
</body>

</html>
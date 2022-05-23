<?php
session_start();
include("connection.php");

?>

<?php


$admin = false;
$errors = [];
if (isset($_POST["login"])) {
    $em = $_POST["email"];
    $pass = $_POST["Pass"];
    if (!$_POST["email"] || !$_POST["Pass"]) {
        array_push($errors, "Invalid Login");
    }
    $query = "SELECT * FROM user WHERE EMAIL='$em'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) === 0) {
        array_push($errors, "User not found");
    } else {
        $row = mysqli_fetch_assoc($result);
        if (!$row) {
            array_push($errors, "User not found.");
        }
        if ($pass != $row["Password"]) {
            array_push($errors, "Invalid Password");
        }
    }
    if (count($errors) > 0) {
        echo ("<script>alert('$errors[0]')</script>");
    } else {

        $_SESSION['email'] = $em;
        $_SESSION['userid'] = $row["User_Id"];
        $_SESSION['name'] = $row["Name"];
        $_SESSION['admin'] = $row["Is_Admin"];
        header("Location:homepage.php");
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Login </title>
</head>

<body>

    <body>
        <div class="login-page">
            <div class="form">
                <div class="login">
                    <div class="login-header">
                        <h3><b>LOGIN</b></h3>
                        <p>Please enter your credentials to login.</p>
                    </div>
                </div>
                <form method="post" action="Login.php" class="login-form" name="form_log">
                    <input type="email" name="email" placeholder="Email" required />
                    <input type="password" name="Pass" placeholder="Password" required />
                    <button type="submit" name="login">login</button>
                    <p class="message">Not registered? <a href="Signup.php">Create an account</a></p>
                </form>
            </div>
            <div style="position:absolute; top: 200px; left: 70px;">
                <div class="card-header bg-white border-warning mb-3">
                    <div class="card-header">
                        Quote
                    </div>
                    <div class="card-body" >
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </body>



<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    header .header {
        background-color: #fff;
        height: 45px;
    }

    header a img {
        width: 134px;
        margin-top: 4px;
    }

    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }

    .login-page .form .login {
        margin-top: -31px;
        margin-bottom: 26px;
    }

    .form {
        left: 100%;
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background-color: #3c37f1;
        background-image: linear-gradient(45deg, #3c37f1, #374b53);
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }

    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }

    .form .message a {
        color: #3c37f1;
        text-decoration: none;
    }

    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }

    body {
        height: 100vh;
        background-color: #3c37f1;
        background-image: linear-gradient(45deg, #3c37f1, #374b53);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>

</html>
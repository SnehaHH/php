<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "forms";

//create a connection

$conn = mysqli_connect($server, $username, $password, $db);

//checking connection

if (!$conn) {
    die("The connection error is : " . mysqli_connect_error());
}

$name1 = $email1  = $fb = $name_error=$phone_error=$fb_error=$email_error=$rate="";
$phone1=NULL;
if (isset($_POST["add"])) {
    function validate_form($data)
    {
        $data = trim(stripslashes(htmlspecialchars($data)));
        return $data;
    }

    if (!$_POST["name"]) {
        $name_error = "Please enter your name <br>";
    } else {
        $name1 = validate_form($_POST["name"]);
    }
    if (!$_POST["email"]) {
        $email_error = "Please enter your email <br>";
    } else {
        $email1 = validate_form($_POST["email"]);
    }
    if (!$_POST["phone"]) {
        $phone_error = "Please enter your phone number <br>";
    } else {
        if(strlen($_POST["phone"]) == "10")
        {
            $phone_error="";
            $phone1 = validate_form($_POST["phone"]);
            
        }
       else
       $phone_error = "Please enter valid phone number <br>";
    }
    if (!$_POST["feedback"]) {
        $fb_error = "Please enter your feedback <br>";
    } else {
        $fb = validate_form($_POST["feedback"]);
    }
    if( isset($_POST["rat"]))
    {
    $rate = validate_form($_POST["rat"]);
    if ($name1 && $email1 && $phone1 && $fb) {
        $query1 = "INSERT INTO feedback_form (FullName, Email, PhoneNumber, Feedback, Rating, SubmitTime) 
        VALUES ('$name1','$email1','$phone1','$fb','$rate',CURRENT_TIMESTAMP)";

        if (mysqli_query($conn, $query1)) {
            echo '<script>
            alert("Thank you for your feedback!");
        </script>';
            $name1 = $email1 = $phone1 = $fb = $name_error=$phone_error=$fb_error=$email_error="";
        } else {
            echo "Error: " . "<br>" . mysqli_error($conn);
        }
    }
}
else {
    if ($name1 && $email1 && $phone1 && $fb) {
        $query1 = "INSERT INTO feedback_form (FullName, Email, PhoneNumber, Feedback, SubmitTime) 
        VALUES ('$name1','$email1','$phone1','$fb',CURRENT_TIMESTAMP)";

        if (mysqli_query($conn, $query1)) {
            echo '<script>
            alert("Thank you for your feedback!");
        </script>';
            $name1 = $email1 = $fb =$phone1= $name_error=$phone_error=$fb_error=$email_error="";
        } else {
            echo "Error: " . "<br>" . mysqli_error($conn);
        }
    }

}
}
?>
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

$name1 = $cv  = $qua = $name_error=$phone_error=$qua_error=$cv_error=$lang=$lang_error="";
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
    if (!$_POST["quali"]) {
        $qua_error = "Please enter your qualification <br>";
    } else {
        $qua = validate_form($_POST["quali"]);
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
    if (!$_POST["cv"]) {
        $cv_error = "Please upload your CV <br>";
    } else {
        $cv = $_POST["cv"];
        }
    if (!$_POST["language"]) {
        $lang_error = "Please select a language <br>";
    } else {
        $lang = validate_form($_POST["language"]);
    }
    if ($name1 && $cv && $phone1 && $qua && $lang) {
        $query1 = "INSERT INTO career_form (FullName,PhoneNo,Language,Qualification, CV) 
        VALUES ('$name1','$phone1','$lang','$qua','$cv')";

        if (mysqli_query($conn, $query1)) {
            echo '<script>
            alert("Thank you for your submission!");
        </script>';
            $name1 =  $qua = $cv= $name_error=$phone_error=$qua_error=$cv_error=$lang=$lang_error="";
            $phone1=NULL;
        } else {
            echo "Error: " . "<br>" . mysqli_error($conn);
        }
    }
}

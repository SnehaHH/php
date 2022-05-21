<?php
session_start();
include("connection.php");
 $userID=$_GET["userid"];
 $courseID=$_GET["courseid"];
 $query = "INSERT INTO carts (user_id, course_id) 
            VALUES ('$userID','$courseID')";
            $result = mysqli_query($conn, $query);
?>


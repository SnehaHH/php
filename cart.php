<?php
session_start();
include("connection.php");
$userID = $_GET["userid"];
$courseID = $_GET["courseid"];
$query = "SELECT * FROM subscriptions WHERE User_Id='$userID' AND Course_Id='$courseID'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0) {
    $query = "INSERT INTO carts (user_id, course_id) 
            VALUES ('$userID','$courseID')";
    $result = mysqli_query($conn, $query);
}
if (mysqli_error($conn)) {
    http_response_code(400);
}
http_response_code(400);

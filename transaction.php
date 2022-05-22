<?php
session_start();
include("connection.php");
$success=$_GET["success"];
$u=$_SESSION["userid"];
if($success=="true")
{
    $query="SELECT * from carts WHERE user_id= '$u'";
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_assoc($result))
    {
    $r=$row["course_id"];
    $q="INSERT INTO subscriptions ( User_Id, Course_Id) 
    VALUES ('$u','$r')";
    $result1 = mysqli_query($conn, $q);
    }
    $q="DELETE from carts WHERE carts.user_id= '$u' ";
    $result1 = mysqli_query($conn, $q);
}

header("location:Dashboard/student_dashboard.php");

?>
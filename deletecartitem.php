<?php
session_start();
include("connection.php");
$cid=$_GET['cid'];
$id=$_SESSION["userid"];
$query="DELETE from carts WHERE user_id='$id' AND course_id='$cid'";
$result=mysqli_query($conn,$query);

if(mysqli_error($conn))
{
    http_response_code(400);
}

?>
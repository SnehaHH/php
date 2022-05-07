<?php

$server = "localhost";
$username="root";
$password="";
$db= "forms";

//create a connection

$conn = mysqli_connect($server,$username,$password,$db);

//checking connection

if(!$conn)
{
    die("The connection error is : ".mysqli_connect_error());
}


?>
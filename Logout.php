<?php
if(isset($_COOKIE[session_name()]))
{
 setcookie(session_name(),'',time()-86400,'/');
}
session_unset();
session_destroy();
echo("<script> window.onload = function () { alert('Successfully logged out');
    window.location.replace('Login.php'); </script>");


?>
<?php
session_start();
unset($_SESSION['uname']);
unset($_SESSION['id']);
session_destroy();
if(!(isset($_SESSION['uname'])))
{
    header("location:login.php");
}

?>
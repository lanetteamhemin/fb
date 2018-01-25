<?php

$con=mysqli_connect("localhost","root","lanetteam1","test");
if(!$con)
{
    echo "<script>alert("+mysqli_connect_error()+");</script>";
}
//else
//{
//    echo "<script>alert('connected to database');</script>";
//}
?>
<?php
require_once("con.php");
$plike=$_POST["id_post"];
//echo "<script>alert('hello');</script>";
$query="select * from fb_post where id=$plike";
$result=mysqli_query($con,$query);

if($row=mysqli_fetch_assoc($result))
{
    $likedata=$row['plike'];
    $likedata++;

    $query="update fb_post set plike=$likedata where id=$plike";
    $result=mysqli_query($con,$query);

    if($result>0)
    {
        echo "$likedata";
    }
    else
    {
        echo "<script>alert('data does not updated')</script>";
    }
}

?>


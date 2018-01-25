<?php
require_once("con.php");
$pid=$_POST["id_post"];
$cmt=$_POST["comment"];
$dt=date('d-m-Y');
$time=date('H:i:s');
$comment_uid=$_POST["uid"];

$query="insert into fb_comment(comment,comment_uid,cdate,ctime,post_id) values('$cmt',$comment_uid,'$dt','$time',$pid);";
$result=mysqli_query($con,$query);

if($result>0)
{
    $query="select * from fb_comment where post_id=$pid";
    $result=mysqli_query($con,$query);

    $row=mysqli_num_rows($result);

    $q="update fb_post set post_cnt=$row where id=$pid";
    $r=mysqli_query($con,$q);

    echo $row;

}
else
{
    echo "error";
}

?>


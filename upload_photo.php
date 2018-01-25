<?php
    require_once("index.php");
?>

    <div class="container">
        <div class="row ">
            <form action="#" method="post" enctype="multipart/form-data">
                <h2>post upload</h2>
                <br>
                Upload Image:
                <input type="file" name="pfile[]" multiple="multiple"><br>

                <input type="submit" class="btn btn-info " value="upload" name="upload">
            </form>
        </div>
    </div>



<?php
    if(isset($_POST['upload']))
    {

        $postdata=$_FILES['pfile']['name'];
        $uid=$_SESSION['id'];
        $date=date('d-m-Y');
        $time=date('H:i:s');

        $total = count($postdata);
        $flag=0;

        for($i=0; $i<$total; $i++) {
            $tmpFilePath = $_FILES['pfile']['tmp_name'][$i];
            if ($tmpFilePath != ""){
                $filepath=$postdata[$i];
                echo "<script>alert($filepath);</script>";
                $newFilePath = "images/" . $filepath;
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {

                    $query="insert into fb_post(post,post_date,post_time,user_id) values('$filepath','$date','$time',$uid)";
                    $result=mysqli_query($con,$query);

                    if($result>0)
                    {
                        $flag++;
                        //echo "<script>alert('insert post')</script>";
                    }
                    else{
                        echo "<script>alert('not inserted')</script>";
                    }
                }
                else
                {
                    echo "<script>alert('file not uploaded')</script>";
                }
            }
            else
            {
                echo "<script>alert('does not getting temp file path')</script>";
            }
        }
        if($flag==$total)
        {
            header("location:display.php");
        }

    }
?>
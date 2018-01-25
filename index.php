<?php
    require("con.php");
    session_start();


if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    $query="select * from fb_user where email='$email' && password='$pwd';";
    $result=mysqli_query($con,$query);

    if($row=mysqli_fetch_assoc($result))
    {
        $_SESSION['uname']=$row['fname']." ".$row['lname'];
        $_SESSION['id']=$row['id'];
        $_SESSION['photo']=$row['photo'];

        echo "<script>alert('success');</script>";
        header("location:home.php");
    }
    else
    {
        echo "<script>alert('Invalid credentials');</script>";
    }
}

if(isset($_POST['signup']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pwd=$_POST['password'];
    $cpwd=$_POST['cpassword'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    $year=$_POST['year'];
    $mobile=$_POST['mobile'];
    $birth=$day."-".$month."-".$year;

    $file = $_FILES['photo'];
    $file_name = $file['name'];
    $file_path = $file ['tmp_name'];
    $file_type = $file ['type'];
    $file_size = $file ['size'];

    if(move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$_FILES['photo']['name']))
    {
        $query="insert into fb_user(fname,lname,email,password,photo,mobile,birthday) values('$fname','$lname','$email','$pwd','$file_name','$mobile','$birth');";
        $result=mysqli_query($con,$query);

        if($result>0)
        {
            $query="select * from fb_user where email='$email' and password='$password'";
            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_assoc($result);

            echo "<script>alert('insert data');</script>";
            $_SESSION['uname']=ucwords($fname)." ".ucwords($lname);
            $_SESSION['id']=$row['id'];
            $_SESSION['photo']=$row['photo'];

            header("location:home.php");
        }
        else{
            echo "<script>alert('not inserted data');</script>";
        }
    }
    else
    {
        echo "<script>alert('error during file uploaded');</script>";
    }
}


?>
<html>
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    ajax library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--    ajax library-->

    <!--    bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--    bootstrap-->

    <!--    Jquery library-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--    Jquery library-->

    <script type="text/javascript">
        $(document).ready(function(){
//            alert("load");
        });
    </script>
</head>
<body>
<div class="container-fluid" style="overflow-y:auto;height:100%;">
    <div class="row" style="background-color:#45619D;color:white;">
        <div class="col-sm-7"
             style="font-size:250%;font-weight:bold;color:#FFF;font-family:sans-serif;padding-left: 5%;padding-top: 1%">
            Facebook
        </div>
        <div class="col-sm-5">
            <form method="post">
                <div class="row">
                    <div class="col-sm-5">
                        <label>Email</label>
                        <input type="text" class="glyphicon-user" id="email" name="email" style="color:black">

                        <input type="checkbox" id="chklogin" name="chklogin">
                        <label>
                            Keep me logged in
                        </label>
                    </div>
                    <div class="col-sm-5">
                        <label>Password</label>
                        <input type="password" id="lpwd" name="pwd" style="color:black">
                        <label>
                            <sapn class="link text-bold">Forgot your password?</sapn>
                        </label>
                    </div>
                    <div class="col-sm-2" style="padding-top: 5%">
                        <input type="submit" name="login" id="login" class="btn btn-primary" value="Log In ">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row well">
        <div class="col-sm-7">
            <img src="images/sample.jpeg" style="position: absolute;width:inherit;height:inherit;">
        </div>
        <div class="col-sm-5">
            <div class="span6 h4" >
                <label>Sign Up</label>
            </div>
            <div class="span7 h4">
                <label>It's free and always will be</label>
            </div>
            <hr >
<!--            sign up form-->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">First Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">last Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="password">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="password">Confirm Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter confirm password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="password">Mobile number:</label>
                    <div class="col-sm-8">
                        <input type="text" id="photo" class="form-control" name="mobile" placeholder="Enter mobile number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="password">Your Photo:</label>
                    <div class="col-sm-8">
                        <input type="file" id="photo" name="photo" placeholder="Select your photo">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender">I am:</label>
                    <div class="col-sm-8">
                        <select name="gender" class="form-control" id="gender" name="gender">
                            <option selected disabled value="-1">--Select Gender--</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="birthday">Birthday:</label>
                    <div class="col-sm-8">
                        <div class="col-sm-4">
                            <select name="month" class="form-control">
                                <option selected disabled value="-1" id="month" name="month">Month</option>
                                <?php
                                for ($i=1;$i<=12;$i++)
                                {
                                    echo "<option>$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select name="day" class="form-control" id="day" name="day">
                                <option selected disabled value="-1">Day</option>
                                <?php
                                for ($i=1;$i<32;$i++)
                                {
                                    echo "<option>$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select name="year" class="form-control" id="year" name="year">
                                <option selected disabled value="-1">Year</option>
                                <?php
                                $year=1980;
                                $curyear=date("Y");
                                for ($i=$year;$i<$curyear;$i++)
                                {
                                    echo "<option>$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="text-align: center">
                    <input type="submit" name="signup" id="signup" class="btn btn-success" value="Sign Up">
                </div>
            </form>
<!--            sign up form-->
            <hr>
        </div>
    </div>
    <div class="row" style="background-color: #45619D;color:white">
        <div class="col-sm-5"
             style="font-size:250%;font-weight:bold;color:#FFF;font-family:sans-serif;padding-left: 5%;padding-top: 1%;padding-bottom: 1%">
            <img src="images/logo.jpeg" width="10%" height="6%">
        </div>
        <div class="col-sm-7" style="position: fixed;margin-bottom: 1%">

        </div>
    </div>
</div>
</form>
</body>
</html>

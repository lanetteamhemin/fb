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
            $("#login").click(function(){

                $email=$("#ggwp1").val();
                $pwd=$("#ggwp2").val();
                alert($email);
                alert($pwd);
                if($email.empty() && $pwd.empty())
                {
                    alert("Please enter email & password");
                }
            })
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
        <div class="col-sm-2">
            <div class="span5 text-bold">
                <label>Email</label>
            </div>
            <div class="span7">
                <input type="text" id="ggwp1" name="uname" style="color:black">

            </div>
            <div class="span5">
                <input type="checkbox" id="chklogin" name="chklogin">
                <label>
                    Keep me logged in
                </label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="span5 text-bold">
                <label>Password</label>
            </div>
            <div class="span7">
                <input type="password" id="ggwp2" name="pwd" style="color:black">
            </div>
            <div class="span5">
                <label>
                    <sapn class="link text-bold">Forgot your password?</sapn>
                </label>
            </div>
        </div>
        <div class="col-sm-1 vertical-center" style="padding-right: 5%;padding-top: 1.5%">
            <input type="submit" name="login" id="login" class="btn btn-primary" value="Log In ">
        </div>
    </div>
    <div class="row well">
        <div class="col-sm-7">
            <img src="../images/sample.jpeg" style="position: absolute;width:80%;height:inherit;">
        </div>
        <div class="col-sm-5">
            <div class="span6">
                <label>Sign Up</label>
            </div>
            <div class="span7">
                <label>It's free and always will be</label>
            </div>
            <hr>
            <form action="#" method="post" class="form-horizontal" >
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="form-group">
                                <label class="text-right">First Name:</label>
                                <input type="text" class="form-control" name="fname" id="fname">
                            </div>
                            <div class="form-group">
                                <label class="text-right">Last Name:</label>

                                <input type="text" class="form-control" name="lname" id="lname">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 text-right">Your Email:</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 text-right">Re-enter Email:</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="remail" id="remail">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 text-right">Password:</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="pwd" id="pwd">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 text-right">Confirm Password:</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="cpwd" id="cpwd">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 text-right">I am:</label>
                            <div class="col-sm-7">
                                <select name="gender" class="form-control" id="gender">
                                    <option selected disabled value="-1">--Select Gender--</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="text-right">Birthday:</label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <select name="Month" class="form-control">
                                            <option selected disabled value="-1" id="month">Month</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="day" class="form-control" id="day">
                                            <option selected disabled value="-1">Day</option>
                                            <?php
                                            for ($i=0;$i<32;$i++)
                                            {
                                                echo "<option>$i</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="year" class="form-control" id="year">
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
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-10 text-center">
                                <input type="submit" name="signup" id="signup" class="btn btn-success" value="Sign Up">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
        </div>
    </div>
    <div class="row" style="background-color: #45619D;color:white">
        <div class="col-sm-5"
             style="font-size:250%;font-weight:bold;color:#FFF;font-family:sans-serif;padding-left: 5%;padding-top: 1%;padding-bottom: 1%">
            Facebook
        </div>
        <div class="col-sm-7" style="position: fixed;margin-bottom: 1%">

        </div>
    </div>
</div>
</form>
</body>
</html>
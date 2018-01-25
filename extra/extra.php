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

<div class="row" style="background-color:#45619D;color:white;">
    <div class="col-sm-7"
         style="font-size:250%;font-weight:bold;color:#FFF;font-family:sans-serif;padding-left: 5%;padding-top: 1%">
        Facebook
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label for="email" >Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>





        <div class="span5 text-bold">
            <label>Email</label>
        </div>
        <div class="span7">
            <input type="text" id="ggwp1" name="uname" >

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
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
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

</body>
</html>
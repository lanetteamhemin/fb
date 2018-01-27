<?php
require("con.php");
session_start();
$query="select * from fb_post where user_id=".$_SESSION['id'];
$result=mysqli_query($con,$query);

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
        $(document).ready(function() {
            $(".comment").click(function(){
                $ref=$(this);
                $pid=$ref.val();
                $txt=$("#txt"+$pid).val();
                $comment="#comment"+$pid;
                $uid=$("#uid").val();

                $.ajax({
                    type: "POST",
                    url: "comment.php",
                    data: { id_post : $pid,comment : $txt,uid:$uid }
                }).done(function(data){
                    $("#txt"+$pid).val("");
                    alert("your comment are submitted...");
                    $($comment).text("Comment "+data);
                });
            })

            $(".likeclick").click(function () {
                $ref=$(this);
                $data=$ref.val();
                $target="#like"+$data;

                $.ajax({
                    type: "POST",
                    url: "update_like.php",
                    data: { id_post : $data }
                }).done(function(data){
                    $($target).text("Like "+data);
                });
            });
        });
    </script>
    <style type="text/css">
        #mycontainer{
            width:80%;
            height: 15%;

        }
        #uname
        {
            padding-right: 10%;
            font-weight: bold;
            font-family: sans-serif;
            height: 20%;
            width: 100%;
        }
        .set-img
        {
            width: 100%;height:100%;border:2px solid #22abe9;
        }
        .setimg
        {
            width:100%;
            background-repeat: no-repeat;
            background-image: url("/images<?php echo $_SESSION['photo']?>");
        }
        .temp
        {
            text-align: end;
        }
    </style>
</head>
<body style="background-color:#45619D ">
    <?php $photo="images/".$_SESSION['photo']; ?>
    <div class="container"  style="color:#22abe9;background-repeat: no-repeat; background-color: #dfe9ff;z-index:-1">

<!--        header-->
        <div class="row setimg" style="bottom: 0.5%;padding: 2%;" >
            <div class="col-sm-3" style="width:20%;height:20%;display: inline-block;overflow: hidden;">
                <img src="images/<?php echo $_SESSION['photo'];?>" class="set-img">
            </div>
            <div class="col-sm-9" style="text-align:right;height:20%;border: 2px solid black;vertical-align: text-bottom;">
                <label id="uname" style="height: 100%;width: 100%;font-size:250%;
	bottom: 0px;display: inline-block;overflow: hidden;">
                    <?php echo $_SESSION['uname'] ?>
                </label>
            </div>
        </div>

        <br>
<!--        menu-->
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="home.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Submenu 1-1</a></li>
                            <li><a href="#">Submenu 1-2</a></li>
                            <li><a href="#">Submenu 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu 2</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
        </div>

        <br>
<!--        main content-->
        <div class="row row-divided well" >
            <div class="col-xs-2 column-one " style="font-size: 150%">
                <a href="upload_photo.php">Upload Post</a>
            </div>
            <div class="col-xs-1 vertical-divider"></div>

            <div class="col-xs-9 column-two " style="overflow: scroll;padding: 5px;height: 100%;">
                <?php
                while($row=mysqli_fetch_assoc($result))
                {
                    ?>
                    <div class="row well" >
                        <div class="col-sm-4" style="overflow: scroll;padding: 5px;">
                            <img src="images/<?php echo $row['post'];?>" style="border:10px solid black;border-radius:3%;" width="100%" ;>
                            <span>
                                <button class="likeclick btn btn-info btn-lg" value="<?php echo $row['id']; ?>">
                                    <span id="like<?php echo $row['id']; ?>">
                                            <span class="glyphicon glyphicon-thumbs-up"></span>
                                            Like <?php echo $row['plike']; ?>
                                    </span>
                                </button>
                            </span>
                        </div>
                        <div class="col-sm-8" style="margin-top:3%;">
                            File Name : <?php echo $row['post'];?><br>
                            Date : <?php echo $row['post_date'];?></br>
                            Time : <?php echo $row['post_time'];?></br>
                            <span class="row cmt">
                                <input type="text" id="txt<?php echo $row['id']; ?>" class="col-sm-9" >
                                <button class="comment btn btn-info col-sm-3" value="<?php echo $row['id']; ?>">Enter</button>
                            </span><br>
                            <span id="comment<?php echo $row['id']; ?>" style="font-size:100%;margin-left:5%;color: #7a7a7a;">
                                Comment <?php echo $row['post_cnt']; ?>
                            </span>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <!--        <div class="vertical-divider"></div>-->
        </div>
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-10">

            </div>
        </div>
    </div>
</body>
</html>

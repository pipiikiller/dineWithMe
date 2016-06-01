<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="dist/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/star-rating.js" type="text/javascript"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="dist/css/rating-static.css" media="all" rel="stylesheet" type="text/css" />
    <link href="dist/css/rating-static.css" media="all" rel="stylesheet" type="text/css" />

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<style>

.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
display: block;
max-width: 100%;
height: 400px;
</style>

<body>
<?php
error_reporting(E_ALL^E_NOTICE);
//Edit Database Information here
$servername = "localhost";
$uname = "root";
$upasswd = "";
$db="dinewithme";



  // Create connection
  $conn = mysqli_connect($servername, $uname, $upasswd, $db);

  if(isset($_POST['suburb'])){
  $id_res=$_POST['suburb'];



  $sql=mysqli_query($conn,"SELECT * FROM restaurant WHERE res_id='".$id_res."'");
  while($row=mysqli_fetch_assoc($sql)){

    $name= $row['res_name'];
    $location= $row['res_lacation'];
    $type= $row['res_type'];
    $info= $row['res_info'];
    $map=$row['res_map'];
  }



}




 ?>

<div class="section">
    <div class="container">

            <center>


                  <h1><b><font color="white">.: DineWithMe :.</font> </b></h1>

              </center>
            <center><h3><font color="pink">Singapore's Best Food and Restaurant Guide</font> </h3></center>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="index.php">Home</a></li>
                         <li><a href="filter.php">Restaurant</a></li>
                          <li><a href="about.php">About</a></li>


                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                            <center>
                               <img class='img-circle' src='img/res/<?php echo$id_res;?>.jpg' alt='Generic placeholder image' width='200' height='200'>

                                </center>
                            </div>
                            <script>
                               var count = 1;
                               function setColor(btn, color) {
                                   var property = document.getElementById(btn);
                                   if (count == 0) {
                                       property.style.color= "#101010"
                                       count = 1;
                                   }
                                   else {
                                       property.style.color = "pink"
                                       count = 0;
                                   }
                               }
                           </script>


                            <div class="col-md-5">

                                <h1>Name: <?php echo$name;?></h1>
                                        <hr>
                                <p>Brief Description: <?php echo$info;?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="section" style="padding-top: 10px">

        <div class="row">
            <div class="col-md-12">
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="myCarousel" data-interval="false" class="carousel slide"
                                     data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="img/res/<?php echo$id_res;?>.1.jpg">
                                        </div>
                                        <div class="item">
                                            <img src="img/res/<?php echo$id_res;?>.2.jpg">
                                        </div>
                                        <div class="item">
                                            <img src="img/res/<?php echo$id_res;?>.3.jpg">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-md-6">



                                    </br>Location- <?php echo$location;?>
                                <hr>
                                    <br>Restaurant Type - <?php echo$type;?></p>



                                <form action="" method="post">
                                    <div class="btn-group">
                                        <!-- <a href="#" class="smiley" class="smile"></a>
                                         <a href="#" class="btn btn-default">Emjoii2</a>
                                         <a href="#" class="btn btn-default">Emojii3</a>-->
                                        <a class="btn btn-default" href="#" id="demo">
                                            <i class="fa fa-thumbs-o-up fa-2x" id="thumb" aria-hidden="true" onclick="setColor('thumb','#101010')" ></i>
                                        </a>
                                        <a class="btn btn-default" href="#">
                                            <i class="fa fa-heart fa-2x" id="heart" aria-hidden="true" onclick="setColor('heart','#101010')"></i>
                                        </a>
                                        <a class="btn btn-default" href="#">
                                            <i class="fa fa-frown-o fa-2x" aria-hidden="true" id="sad" onclick="setColor('sad','#101010')"></i>
                                        </a>


                                    </div>


                                    <input type="submit" value="Review" class="btn btn-success" id="btnReview">

                                </form>
                                <form action="map.php" method="post">
                                    <input type="hidden" name="restaurantid" value="<?=$id_res?>"/><input class="btn btn-danger" type="submit" value="Map">



                                </form>

                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">
        <div class="container" id="TestContainer">
            <h2>Review</h2>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw margin-bottom"></i>All</a></li>
                <li><a data-toggle="tab" href="#menu1"><i class="fa fa-spinner fa-spin fa-2x fa-fw margin-bottom"></i>Write Review</a></li>


            </ul>

            <style>
             #rcorners5 {
             border-radius: 15px 50px 30px;
             background: #5bad5e;
             padding: 20px;
             width: 850px;
             height: 100px;
             }

             h4{
                 color: #590a0e;
                 font-family: verdana;
                 font-size: 200%;
             }




             </style>
             <div class="tab-content">
                 <div id="home" class="tab-pane fade in active">

                 <?php

                 $mysqli_connection =  mysqli_connect('localhost','root','','dinewithme');
                 $test_sql ="SELECT *,user.user_name FROM review JOIN user ON review.user_id=user.user_id WHERE res_id='".$id_res."' ";
                 $super = "SELECT * FROM review WHERE res_id='".$id_res."' ";
                 $record= mysqli_query($mysqli_connection,$test_sql);


                 while($user=mysqli_fetch_assoc($record)){
                   $review_title= $user['review_name'];
                   $user_name =$user['user_name'];
                   $reviewer=$user['user_id'];
                   $review_comment=$user['review_comment'];
                   $res_rate=$user['rate'];
                     $res_rating=$res_rate*10;


                  // echo"<h3>'".$review_title."'</h3>
                 //  <p>'".$review_comment."'</p><br><p>Rate '".$res_rate."' <br>  <p>'".$user_name."'</p>";

                     echo"<div class=\"row\">
                     <div class=\"col-md-3\" style=\"background-color:lavender; border-radius: 15px;\">
                              <div class=\'userpanel'><h3>User</h3></div>
                             <div class=\"username\"><span class=\"glyphicon glyphicon-user\"> </span>'".$user_name."'</div>

                     </div>


                     <div class=\"col-md-9\" style=\" border:1px solid black; border-radius: 15px;\">
                         <div class=\"reviewName\"><h4>'".$review_title."'<h4></div>

                         <span class=\"rating-static rating-$res_rating\"></span>
                         <hr>
                         <div class=\"ReviewComment\"><p id='rcorners5'>'".$review_comment."'</p></div>

             </div>

                     </div>   <hr>";



                 }

                 ?>

</div>


                <div id="menu1" class="tab-pane fade">
                    <h3>Write Review</h3>
                    <form role="form" action="submitreview.php" method="post">
                        <div class="col-md-12">
                            <input id="rating-system" type="number"
                                   class="rating" min="1" max="5" step="1" name="rate">
                        </div>


                        <div class="form-group">
                            <label class="control-label">Title of your review</label>
                            <input class="form-control" id="TitleReview"
                                   placeholder="Type here" type="text" name="titlere">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Your review</label>
                            <textarea class="form-control" name="review" placeholder="Share your experience with us"></textarea>
                        </div>
                        <input type="hidden" name="restaurantid" value="<?=$id_res?>"/>

                        <input type="submit" class="btn btn-default" value="Submit">
                    </form>
                </div>

            </div>
        </div>
        </div>


</body>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: Win Developer Team
 * Date: 27/3/16
 * Time: 3:26 PM
 */

error_reporting(E_ALL^E_NOTICE);
session_save_path();
session_start();
$j = $_SESSION['profile'];
$k = $_SESSION['p_id'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.thecutlerychronicles.com/favicon.ico">

    <title>Dine With Me</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-static-top">
          <div class="container">

            <center>


                  <h1><b><font color="white">.: DineWithMe :.</font> </b></h1>

              </center>
            <center><h3><font color="#f0fff0">Singapore's Best Food and Restaurant Guide</font> </h3></center>
            <ul class="nav nav-justified">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="filter.php">Restaurants</a></li>

                <li><a href="aboutus.php">About us</a></li>

              <?php
              if(isset($_SESSION['p_id'])&& isset($_SESSION['profile']) ){
                echo"<li><a href='profile.php'>Profile</a></li>";
              }else{
                echo"<li><a href='login.php'>Login/Register</a></li>";
              }
               ?>


            </ul>

         </div>





            <!--   <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Project name</a>
             </div>
           <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                 <li class="active"><a href="#">Home</a></li>
                 <li><a href="#about">About</a></li>
                 <li><a href="#contact">Contact</a></li>
                 <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a href="#">Action</a></li>
                     <li><a href="#">Another action</a></li>
                     <li><a href="#">Something else here</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="dropdown-header">Nav header</li>
                     <li><a href="#">Separated link</a></li>
                     <li><a href="#">One more separated link</a></li>
                   </ul>
                 </li>
               </ul>
             </div>-->
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Explore the world of restaurants</h1>
              <p> Why you not update your eating appetite! DineWithMe is the right place for you</p>
              <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Why DineWithMe?</h1>
              <p>Thousands of restaurant reviewer dock here. Wonder how we establish DineWithMe? Check it out!!</p>
              <p><a class="btn btn-lg btn-primary" href="aboutus.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Browse your restaurant</h1>
              <p>See top restaurants and fire up your appetite!! This is your chance</p>
              <p><a class="btn btn-lg btn-primary" href="filter.php" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <!-- Top Three Restaurant php -->
    <div class="container marketing">
        <table>
            <?php

            error_reporting(E_ALL ^ E_DEPRECATED);


            //Edit Database Information here
            $servername = "localhost";
            $uname = "root";
            $upasswd = "";
            $db="dinewithme";


            // Create connection
            $conn = mysqli_connect($servername, $uname, $upasswd, $db);

            $super="SELECT * FROM restaurant ORDER BY average_rate DESC LIMIT 3";

            $index=0;
            $records=mysqli_query($conn,$super);

            while($row=mysqli_fetch_assoc($records)){

                $array[$index]=$row['res_name'];
                $array1[$index]=$row['res_info'];
               // echo"<tr><td>" .$row['res_name']."</td></tr>";
                $index = $index+1;
            }

            ?>

        </table>


        <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/vivocity-jamies-italian-restaurant.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><?php echo $array[0] ?></h2>
          <p><?php echo $array1[0]?></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/thai-express-restaurant-singapore.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><?php echo $array[1] ?></h2>
          <p><?php echo $array1[1] ?></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/SAM_1635_zpsb645b9f7.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><?php echo $array[2] ?></h2>
          <p><?php echo $array1[2] ?></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Top European Restaurant <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead"> Those restaurant are the top rated by users. We are offering what we feel you’ll
find to be sage advice and valuable insight as you continue to consider ways in
which to improve your operation or prepare for successful meal.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src ="img/Top-European-Restaurant.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">No matter what you are craving, this restaurant provides the satisfaction meal
for client to choose. The familiar dishes appeal to a timid eater and style of cook
for eater ready to deep harder into the cuisine.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src ="img/Top-Chinese-Restaurant.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Sky bar of tower restaurant provides the best scene for couple to check the percept view in the city. The rooftop chill out venue and innovative restaurant experience the environment with own mate. It makes the chemical reaction in the relationship. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src= "img/Top-Romatic-Restaurant.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="Top D point Earner">Check our top D point Earner <span class="text-muted">Be like Him.</span></h2>
                <p class="lead"> What can you do with D points? D points are your promotion point to particular restaurants.
                    With D points, you can embrace our restaurants unlimited offers. So let's review restaurants, earn your "Precious"!!

                </p>
            </div>
            <div class="col-md-5">
                <table class ="table table-striped">
                    <thead>
                    <tr>

                        <th>Name</th>
                        <th>Dpoints</th>

                    </tr>
                    </thead>
                    <?php

                    error_reporting(E_ALL ^ E_DEPRECATED);


                    //Edit Database Information here
                    $servername = "localhost";
                    $uname = "root";
                    $upasswd = "";
                    $db="dinewithme";


                    // Create connection
                    $conn = mysqli_connect($servername, $uname, $upasswd, $db);

                    $super="SELECT * FROM user ORDER BY user_dpoint DESC LIMIT 3";


                    $records=mysqli_query($conn,$super);


                    while($row=mysqli_fetch_assoc($records)){


                        echo"<tr><td>" .$row['user_name']."</td><td>" .$row['user_dpoint']."</td></tr>";


                    }




                    ?>

                </table>

            </div>
        </div>
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; Win Developer Team 2016, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

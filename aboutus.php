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

<html>
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
    <link href="carousel.css" rel="stylesheet"

</head>




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
                    if(isset($_SESSION['p_id'])){
                      echo"<li><a href='profile.php'>Profile</a></li>";
                    }else{
                      echo"<li><a href='login.php'>Login/Register</a></li>";
                    }
                     ?>


                  </ul>




            </div>
    </div>
    </nav>

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

<!-- Start From Here  -->
<center>
<h1>About Us</h1>

<table width="620px"
    padding="10px"
    border="5px"
    margin="0">
    <tr>
<td>

  <p>Are you struggling in meal times? </p>
<blockquote>Sometimes, people can not decided the meal to take in a restaurant. The waitress and waiter somehow cannot recommend a high rate meal in own restaurant. We now are having multiple choices to determine the food and desire to try the good foods in certain restaurant. Even, you finally have idea what to have, but the cant be assured the taste of food is good in a restaurant. Therefore, The advantages for use in this website, which provides a free and efficient platform for users to decide what and where to have meals. This website will provide a helpful lists of food in typical categories and the high rate restaurant to attend. Accordingly, the feature overall wouldn't distinguish from other website that's similar as food research restaurant. We offer the Dine (D) point, which is a credit for clients to earn by giving comments and rating quality for restaurants. It will be set in a standard of amount of each restaurant to receive discount depending on the restaurant where clients attended.  Second, it can assist users to recognize more restaurants that you would ever know. In the other hand, restaurant can promote own store to more people to see on this social network. We are looking for satisfying the users, meanwhile giving the benefit. We believed, it can offer the most efficient way for user to try a new restaurant with lower price.</blockquote>
<cite>Win Developer Team</cite>





</td>
    </tr>


</table>


</center>
<hr>
<div class="row">
  <center>
  <h1>Team Members</h1>
</center>
  <div class="col-lg-3">
    <img class="img-circle" src="img/leo.jpg" alt="Generic placeholder image" width="140" height="140">
    <h3>Project manager</h3>
    <p>The position is to have clear structure to manage the team members and ensure the documentation is completed with marking criteria.
       Management tools have to be flexible operated. The fairly share the task of the assignment.</p>

  </div><!-- /.col-lg-4 -->
  <div class="col-lg-3">
    <img class="img-circle" src="img/phyo.jpg" alt="Generic placeholder image" width="140" height="140">
    <h3> Website designer, HTML5 application developer
</h3>
    <p>Phyo Pyae Thet Pon possessed the best skill t
      o develop and design the website. Gather the resources of frontend and backend to ensure the project to be able to access. The most important role that plays to design and develop the website.
</p>

  </div><!-- /.col-lg-4 -->
  <div class="col-lg-3">
    <img class="img-circle" src="img/win.jpg" alt="Generic placeholder image" width="140" height="140">
    <h3> Web developer, Backend Developer
</h3>
    <p> The responsibility of this position is to build and maintains web sites with the client and consumers in mind. Builds a web site from the bottom up, designing the web site in such a way that both old and new end users have no difficulty navigating the site. Also must find resources and ensure the documentation is completed with marking criteria
</p>

  </div><!-- /.col-lg-4 -->
  <div class="col-lg-3">
    <img class="img-circle" src="img/vova.jpg" alt="Generic placeholder image" width="140" height="140">
    <h3>Data Entry, Analyst, Web App Tester
</h3>
    <p>The position is the back-end of the website, the programming and interactions on the pages. Vladimir focuses on how a site works and how the customers get things done. Also, position is the customer-facing part of the website. Vladimir is concerned with how a site looks and how the customers interact with it.
</p>

  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->




<hr>
<hr>



<footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; Win Developer Team 2016, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>



</html>

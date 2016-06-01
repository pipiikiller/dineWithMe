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
   <!-- <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!--  <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   <!-- <script src="assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <!--  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> -->
  <!--  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    <![endif]-->

    <!-- Custom styles for this template -->
   <link href="carousel.css" rel="stylesheet">

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
<div class="container">
    <form action="" method="post">


<div class="col-md-2">
        <select class="selectpicker"  name="food">

            <option value="Chinese">Chinese</option>
            <option value="European">European</option>
            <option value="Indian">Indian</option>
            <option value="Seafood and Sushi">Seafood and Sushi</option>
            <option value="Thai">Thai</option>

        </select>
        <input type="submit" value="Search" name="postbutton" class="btn btn-lg btn-primary btn-block">
      </div>
    </form>
      <div class="col-md-6">
      </div>
            <div class="col-md-2">
              <form  method="post" action=""  id="searchform">

                      <input  type="text" name="name" placeholder="Restaurant Name" >
              	      <input  name="searchbutton" type="submit" class="btn btn-lg btn-primary btn-block" value="Search">
              </form>
            </div>

              <form method="post" action="description.php">
              <?php
              error_reporting(E_ALL^E_NOTICE);
              if($_POST['searchbutton']){
                  $search=$_POST['name'];
                  $servername = "localhost";
                  $uname = "root";
                  $upasswd = "";
                  $db="dinewithme";


                  // Create connection
                  $conn = mysqli_connect($servername, $uname, $upasswd, $db);
                  $search= preg_replace("#[^0-9a-z]#i","",$search);


                  $query = mysqli_query($conn,"SELECT * FROM restaurant WHERE res_name LIKE '%$search%' ");
              $count= mysqli_num_rows($query);
                if($count==0){
                  echo"No Result";
                }else{
                  echo '  <form method="post" action="description1.php">
                      <table class ="table table-striped">
                          <thead>
                          <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Address</th>
                              <th>Type of Restaurant</th>
                              <th>View More</th>
                          </tr>
                          </thead>
                          <tbody>';

                  while($user=mysqli_fetch_assoc($query)){
              /*$rname= $row['res_name'];
              $rlocat=$row['res_lacation'];
              $rinfo=$row['res_info'];

              */

$buttonid=$user['res_id'];
              echo "<tr><td width='20%'><input type='hidden' name='id' value='".$user['res_id']."'><img class='img-circle' src='img/res/".$buttonid.".jpg' alt='Generic placeholder image' width='140' height='140'> </td><td>{$user['res_name']}</td><td>{$user['res_lacation']}</td><td>{$user['res_type']}</td>
                                       <td width='30%'> <button name='suburb' type='submit' value='".$buttonid."' class=\"btn btn-default\">
                                           <i class=\"fa fa-arrow-right fa-2x\" aria-hidden=\"true\"></input></i>
                                       </td></tr>\n";



                  }//end while

                }




                }


               ?>
               </form>



          </div>
    </form>

    <?php
if(!isset($_POST['searchbutton'])){
  echo '  <form method="post" action="description1.php">
      <table class ="table table-striped">
          <thead>
          <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Address</th>
              <th>Type of Restaurant</th>
              <th>View More</th>
          </tr>
          </thead>
          <tbody>';


          error_reporting(E_ALL ^ E_DEPRECATED);
          if(!isset($_POST['postbutton'])){
            $mysqli_connection =  mysqli_connect('localhost','root','','dinewithme');
            $super = "SELECT * FROM restaurant";
            $record= mysqli_query($mysqli_connection,$super);


            while($user=mysqli_fetch_assoc($record)){
              $buttonid=$user['res_id'];
            echo "<tr><td width='20%'><input type='hidden' name='id' value='".$user['res_id']."'><img class='img-circle' src='img/res/".$buttonid.".jpg' alt='Generic placeholder image' width='140' height='140'> </td><td>{$user['res_name']}</td><td>{$user['res_lacation']}</td><td>{$user['res_type']}</td>
                                     <td width='30%'> <button name='suburb' type='submit' value='".$buttonid."' class=\"btn btn-default\">
                                         <i class=\"fa fa-arrow-right fa-2x\" aria-hidden=\"true\"></input></i>
                                     </td></tr>\n";



            }

          }elseif(isset($_POST['postbutton'])){

              $food=$_POST['food'];

              //connect db
            $mysqli_connection =  mysqli_connect('localhost','root','','dinewithme');

              if (!$mysqli_connection)
              {
                  echo "Please try later.";
              }
              else
              {
                  //mysqli_select_db('dinewithme',$mysqli_connection);
                  //echo "Connection Succesful.";
                //  mysql_select_db($database, $mysqlConnection);
              }
              //select db


              $super = "SELECT * FROM restaurant where res_type= '" . $food . "' ";



              $records=mysqli_query($mysqli_connection,$super);

              if(mysqli_num_rows($records)== 0){

                  echo '<tr><td colspan="4">No Rows Returned</td></tr>';
              }





      //restaurant type filter and submit
      while($user=mysqli_fetch_assoc($records)){
        $buttonid=$user['res_id'];
      echo "<tr><td width='20%'><input type='hidden' name='id' value='".$user['res_id']."'><img class='img-circle' src='img/res/".$buttonid.".jpg' alt='Generic placeholder image' width='140' height='140'> </td><td>{$user['res_name']}</td><td>{$user['res_lacation']}</td><td>{$user['res_type']}</td>
                               <td width='30%'> <button name='suburb' type='submit' value='".$buttonid."' class=\"btn btn-default\">
                                   <i class=\"fa fa-arrow-right fa-2x\" aria-hidden=\"true\"></input></i>
                               </td></tr>\n";



      }



          }



}
     ?>




    <?php



    ?>

        </tbody>
    </table>
  </form>

</div>



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

<?php
/**
 * Created by PhpStorm.
 * User: Win Developer Team
 * Date: 27/3/16
 * Time: 3:26 PM
 */
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

<!-- Start From Here  -->
<?php
error_reporting(E_ALL ^ E_DEPRECATED);

if(isset($_POST['restaurantid'])){
  $restaurant_id= $_POST['restaurantid'];
  
  $mysqli_connection =  mysqli_connect('localhost','root','','dinewithme');
 $query = "SELECT * FROM restaurant WHERE res_id='".$restaurant_id."' ";
 $records=mysqli_query($mysqli_connection,$query);




}
while ($row = mysqli_fetch_assoc($records)) {
    $map=$row['res_map'];

}


?>

<div class="container" width="auto">



        <?php echo $map; ?>



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

<?php
/**
 * Created by PhpStorm.
 * User: xerofuture
 * Date: 25/4/16
 * Time: 9:12 AM
 */
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
$j = $_SESSION['profile'];
$k = $_SESSION['p_id'];

//Edit Database Information here
$host="localhost";
$user="root";
$pass="";
$db="dinewithme";

//Edit Database Information here
$servername = "localhost";
$uname = "root";
$upasswd = "";
$db="dinewithme";


// Create connection
$conn = mysqli_connect($servername, $uname, $upasswd, $db);



if(isset($_POST['titlere'])){

  //Receive Data From Previous Page
    $titlere=$_POST['titlere'];
    $review=$_POST['review'];
    $rate=$_POST['rate'];
    $restaurantid=$_POST['restaurantid'];




//Select two different table
    $sql1="SELECT user_dpoint FROM user WHERE user_id = '".$k."'";
    $sql2="SELECT * FROM restaurant where res_id='".$restaurantid."' ";

    $result1=mysqli_query($conn,$sql1);
    $result2=mysqli_query($conn,$sql2);
//For restaurant rate calculation. First, retrieve initial data in order to calculate rating (average=total/count)
    while($row=mysqli_fetch_assoc($result2)){
      $count=$row['count'];
      $totalvote= $row['total_vote'];
    }
//For user d point calculation
    while($row=mysqli_fetch_assoc($result1)){
      $dpoint= $row['user_dpoint'];

    }
//Adding points accordingly
    $dpointresult=3+$dpoint;
    $count=1+$count;
    $totalvote=$totalvote+$rate;



//SQL Query
    $sql_update1 = "INSERT INTO review(review_name,user_id,review_comment,rate,res_id) VALUES ('".$titlere."' ,'".$k."' ,'".$review."','".$rate."','".$restaurantid."' )";
    $sql_update2="UPDATE user SET user_dpoint = '".$dpointresult."' WHERE user_id= '".$k."' ";
    $sql_update3="UPDATE restaurant SET total_vote= '".$totalvote."', count='".$count."' WHERE res_id= '".$restaurantid."' ";
    $sql_update5="SELECT * FROM restaurant WHERE res_id='".$restaurantid."' ";

    $result=mysqli_query($conn,$sql_update1);
    $result3=mysqli_query($conn,$sql_update2);
    $result5=mysqli_query($conn,$sql_update3);
    $result6=mysqli_query($conn,$sql_update5);

//Retrieve new calculated count and total vote
    while($row=mysqli_fetch_assoc($result6)){
      $count=$row['count'];
      $totalvote= $row['total_vote'];

    }

//Recalculate average
    $average_result=$totalvote/$count;
    $sql_update4="UPDATE restaurant SET average_rate= '".$average_result."' WHERE res_id= '".$restaurantid."' ";
    $result4=mysqli_query($conn,$sql_update4);




    if(isset($result)){
        echo "Records added successfully.";
        header('Location: filter.php' );




    } else{
        echo "ERROR: Could not able to execute $sql. ";

    }



}




?>

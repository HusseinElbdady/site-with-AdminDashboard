<?php


if(isset($_POST['btnlogin']))
{
  session_start();

  $logname = $_POST['log_name'];

  $logpass = $_POST['log_pass'];

  include('dbconnection.php');

  $query = "SELECT * FROM `users` WHERE `uname` ='$logname' AND upassword = '$logpass'";

  $result = mysqli_query($conn , $query);

  if(mysqli_num_rows($result) > 0 )
  {
    header("location:index.php");
    $_SESSION['sess'] = $uname;

  }else {
    header("location:login.php");
  }

}









 ?>

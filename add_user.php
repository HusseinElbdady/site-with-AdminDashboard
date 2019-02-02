<?php 

session_start();

if (isset($_POST['btnreg'])) {
	

	$uname = $_POST['r_uname'];

	$umail = $_POST['r_mail'];
	$uphone = $_POST['r_phone'];
	$upassword = $_POST['r_password'];


	include("dbconnection.php");


	$query = "INSERT INTO `users`(`uname`, `umail`, `uphone`, `upassword`) VALUES ('$uname','$umail',$uphone,'$upassword')";

	$res = mysqli_query($conn , $query);

	header("location:index.php");
}

 ?>
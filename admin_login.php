<?php 


session_start(); //to start session 

if(isset($_SESSION['adminsession'])) { //if admin already login redirect to admin dashboard
	header("location:admin_dashboard.php");
}

include('header.php');

 ?>


<div class="container text-primary text-center" >

<h1 class="my-5 ">Admin Login</h1>
<form class="form-group" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <label> Admin Name</label>
    <input type="text" name="admin_name" class="form-control my-2">

    <label> Password</label>
    <input type="password" name="admin_pass" class="form-control my-2">

    <button name="btn_admin_login"  class="btn btn-success">Submit</button>

</form>

</div>


<?php 

include('footer.php');


if (isset($_POST['btn_admin_login'])) 
{
	$admin_name = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];


	include("dbconnection.php");

	$query = "SELECT * FROM admins WHERE name = '$admin_name' AND password = '$admin_pass'";

	$result = mysqli_query($conn , $query);

	if(mysqli_num_rows($result) > 0)
	{
		$_SESSION['adminsession'] = $admin_name;

		header("location:admin_dashboard.php");

	}else
	{
		header("location:admin_login.php");
	}
}

?>
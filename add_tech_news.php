<?php


if(isset($_POST['tbutton']))
{
    $ttitle = $_POST['ttitle'];
    $tdescrip = $_POST['tdescrip'];
    $tarticle = $_POST['tarticle'];
    
    $tech_image_name = $_FILES['timage']['name'];
    $tech_image_type = $_FILES['timage']['type'];
    $tech_image_currentpath = $_FILES['timage']['tmp_name'];

$accepted_types=["image/png","image/jpg","image/jpeg","image/gif"];
if (in_array($tech_image_type , $accepted_types))
{
  $timage_newpath = "uploads/".$tech_image_name;
  move_uploaded_file($tech_image_currentpath, $timage_newpath);

  include('dbconnection.php');

  $query_tech= "INSERT INTO `technews`(`title`, `description`, `article`, `img_path`) VALUES ('$ttitle','$tdescrip','$tarticle','$timage_newpath')";

  if(mysqli_query($conn , $query_tech) == false)
  {
    mysqli_error();
  }
}


}


?>


<?php
include("./dbconnection.php");



if (isset($_POST['sbutton'])) {
  
  $stitle = $_POST['stitle'];
  $sdescrip = $_POST['sdescrip'];
  $sarticle = $_POST['sarticle'];

  $simagename = $_FILES['simage']['name'];
  $simagetype = $_FILES['simage']['type'];
  $simagecurrentpath = $_FILES['simage']['tmp_name'];

  $accepted_types=["image/png","image/jpg","image/jpeg","image/gif"];


  if (in_array($simagetype , $accepted_types)) {

    $simagenewpath = "uploads/".$simagename;
    move_uploaded_file($simagecurrentpath , $simagenewpath);

    $q = "INSERT INTO `sportsnews`(`title`, `description`, `article`, `img_path`) VALUES ('$stitle' , '$sdescrip' , '$sarticle' , '$simagecurrentpath')";


  mysqli_query($conn , $q);


}
}
?>

<?php

session_start();

if(!isset($_SESSION['adminsession']))
{
  header("location:admin_login.php");
}
include("./header.php");


?>
<div class="row text-primary">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Add Sports News</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Add Technology News</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active text-center mr-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        
        <h2 > welcome <span class="text-success"> <?php echo $_SESSION['adminsession'] ?> </span>  </h2>
      </div>
      <div class="tab-pane fade text-center" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        
      <div class="container">
          
      <h2> Adding Sports News </h2>
      <form method="POST" action="add_sport_news.php" class="form-group" enctype="multipart/form-data" >

      <label>Article Title</label>
      <input class="form-control" type="text" name="stitle">
      
      <label>Article description</label>
      <input class="form-control" type="text" name="sdescrip">  

      <label>Article image</label>
      <input class="form-control" type="file" name="simage">


      <label>The Article </label>
      <input class="form-control" type="text" name="sarticle">

      <button class="btn btn-primary" name="sbutton">add article</button>



    </form>

</div>

</div>


      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">


      <div class="container">
          
      <h2> Adding Technology News </h2>
      <form method="post" action="add_tech_news.php" class="form-group" enctype="multipart/form-data" >

      <label>Article Title</label>
      <input class="form-control" type="text" name="ttitle">
      
      <label>Article description</label>
      <input class="form-control" type="text" name="tdescrip">  

      <label>Article image</label>
      <input class="form-control" type="file" name="timage">


      <label>The Article </label>
      <input class="form-control" type="text" name="tarticle">

      <button class="btn btn-primary" name="tbutton">add article</button>



    </form>

</div>

      </div>




      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Settings</div>
    </div>
  </div>
</div>

<?php
include("./footer.php");
?>


<?php

include_once("./header.php");


?>



<div class="container text-primary text-center" >

<h1 class="my-5 ">Login</h1>
<form class="form-group" action="user_login.php" method="POST">

    <label> User Name</label>
    <input type="text" name="log_name" class="form-control my-2">

    <label> Password</label>
    <input type="password" name="log_pass" class="form-control my-2">

    <button name="btnlogin"  class="btn btn-success">Submit</button>

</form>

</div>




<?php

include_once("./footer.php");

?>

<?php

include_once("./header.php");

?>

<div class="container text-primary text-center">

<h2 class="my-5">Regestration</h2>

<form method="POST" action="add_user.php">
<label>User Name</label>
<input type="text" name="r_uname" class="form-control my-3" required>


<label>Email</label>
<input type="mail" name="r_mail" class="form-control my-3" required>


<label>Phone Number</label>
<input type="phone" name="r_phone" class="form-control my-3" required>

<label>Password</label>
<input type="password" name="r_password" class="form-control my-3" required>


<button class="btn btn-success mt-3" name="btnreg">Submit</button>

</form>

</div>










<?php

include_once("./footer.php");

?>
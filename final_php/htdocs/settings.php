<?php

	
require('includes\common.php');
include('includes\header.php');

if(!isset($_SESSION['email'])){
	header('location: login.php');
	
}

?>
<script type="text/javascript">
function validateForm() {
    var x = document.forms[0]["new_password"].value;
    var y = document.forms[0]["confirm_new_password"].value;
    if (x != y) {
        alert("The password and its confirm are not the same");
        return false;
    }
	return true;
}

</script>


<div class="container" style="padding-top:90px;">

<div class="row">
	
		<div class="col-md-4 col-md-offset-4 ">

			 <div class="login-panel panel ">
						<div class="panel-heading">
									<h3 class="">Change Password</h3>
						</div>
						<div class="panel-body">
								
									<form class="form" role="form" method="post" action="change_settings.php"  >
										<fieldset>
											
											<div class="form-group">
												<input class="form-control" placeholder="Old Password" name="old_password" type="password" value="">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="New Password" name="new_password" type="password" value="">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Confirm New Password" name="confirm_new_password" type="password" value="">
											</div>

														
											
											
											<!-- Change this to a button or input when using this as a form -->
											<button onclick="return validateForm()" class="btn btn-sm btn-primary" >Change</button>
										</fieldset>
									</form>
								</div>
								
								
				</div>
		</div>
</div>
</div>

<?php
include('includes\footer.php');

?>

	
</body>
</html>
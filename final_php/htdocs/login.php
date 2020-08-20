<!DOCTYPE html>

<?php
require('includes\common.php');

if(isset($_SESSION['email'])){
	header('location: products.php');
}

include('includes\header.php');
?>

<div class="container" style="padding-top:90px;">

<div class="row">
	
		<div class="col-md-4 col-md-offset-4 ">

 <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">LOGIN</h3>
                    </div>
                    <div class="panel-body">
					
					<p class=" text-warning " >Login to make a purchase</p>
					
                        <form class="form" method="post" action="auth.php" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="submit" class="btn btn-sm btn-primary"/>
                            </fieldset>
                        </form>
                    </div>
					
					<div class="panel-footer">
						Don't have an account? <a href="signup.php">Register</a>
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
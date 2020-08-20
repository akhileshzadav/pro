<!DOCTYPE html>

<?php
 require('includes\common.php');

if(isset($_SESSION['email'])){
	header('location: products.php');
}

include('includes\header.php');
?>
<div class="container" style="padding-top:60px;">
 
	<div class="row ">
	
		<div class="col-md-4 col-md-offset-4">
                    
					<center>
                        <h3> <b> SIGN UP </b></h3>
                    
 					
					
					
                        <form role="form" method = "POST" action = "register_new.php" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="text" autofocus="">
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
									
                                </div>
								
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contact" name="contact" type="text" >
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="City" name="city" type="text" >
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Address" name="address" type="text" >
                                </div>
								
					</center>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="submit" class="btn btn-sm btn-primary"/>
								
								
								
                            </fieldset>
                        </form>
                    </div>
	</div>				
</div>


<?php
	include('includes\footer.php');
?>



	
</body>
</html>
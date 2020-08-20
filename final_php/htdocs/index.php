<?php

require('includes\common.php');

if(isset($_SESSION['email'])){
	header('location: products.php');
}

include('includes\header.php');
 
?>

<div id="banner-image">
	<div class= "container">
		<center>
			<div id="banner_content">
				<h1>We sell lifestyle</h1>
				<p>Flat 40% OFF on premium brands </p>
				<a class ="btn btn-danger btn-lg active" href="products.php">Shop Now</a>
				
				<p></p>
				
			</div>
		</center>
	</div>
</div>
<br />
<br />
<br />

<div class="container "  >
<div class="row text-center">
	<div class="col-md-4 col-sm-6"  >
		<center>
		<img src="images/fastrack_watch.jpeg" height="240px"  alt="" class="thumbnail" />
			<div class="caption">
				<h4>Fastrack NG3089SL05 Black Magic Analog Watch - For Men</h4>
				<p>Price : Rs 2,375 </p>
				<a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
			</div>
		</center>
	</div> 
	
	<div class="col-md-4 col-sm-6" >
		<center>

		<img src="images/highlander_shirt.jpeg" height="240px"   alt="" class="thumbnail" />
			<div class="caption">
				<h4>Highlander Men's Printed Casual Dark Blue Shirt</h4>
				<p>Price : Rs 999 </p>
				<a href="login.php" class="btn btn-primary btn-block">Buy Now</a>

			</div>
		</center>

	</div> 

	<div class="col-md-4 col-sm-6" >
		<center>
				<img src="images/nikon_camera.jpeg" height="220px"   alt="" class="thumbnail" />
					<div class="caption">
						<h4>Nikon D3400 DSLR Camera with Kit Lens AF-P DX NIKKOR 18 - 55 mm f/3.5 - 5.6G VR  (Black)</h4>
						<p>Price : Rs 32,999 <br /></p>
						<a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
					</div>
			</center>
	</div> 

</div>
</div>



<?php

include('includes\footer.php');

?>

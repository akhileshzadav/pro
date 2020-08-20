<!DOCTYPE html>
<?php

require('includes\common.php');
include('includes\header.php');
include('includes\check-if-added.php');


$select_query="SELECT id,product_name,price,thumbnail from items ";
$select_query_result = mysqli_query($conn,$select_query);


?>
<style type="text/css">

.caption{
	height:100px;
}

.p_item{
	margin-bottom:50px;
}

.btn-block{
	margin-top:20px;
}

</style>


<div class="container " style="padding-top:60px;">
	<div class="jumbotron" >
		<h1>Welcome to our Lifestyle Store! </h1>
		<p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
	</div>
</div>



<div class="container ">
<div class="text-center row">
<?php

while ($row = mysqli_fetch_array($select_query_result)){ 
?>
	
	<div class="col-md-3 col-sm-6 p_item" >
		<center>
		
		<?php 
			echo '<img src="data:image;base64,'.base64_encode($row['thumbnail']).' " height="200px"   alt="" class="thumbnail" />';
		?>
				
			<div class="caption">
				<h4><?php echo $row['product_name']; ?> </h4>
				<p><?php echo "Rs ".number_format($row['price'],2);  ?> </p>
				<br />
				<br />
			</div>
			 <?php if (!isset($_SESSION['email']))
    			 { ?> 
			 		<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			 <?php  
	   			}
				else {  
			 			if (check_if_added_to_cart($row['id'])) { 
			 				
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
						} 
						else 
						{                                   
			 ?>   
			 
			     <a <?php echo 'href="cart-add.php?pid='.$row['id'].'"'; ?>   name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
			 
			 <?php                                 
					 }                             
			 }                             
			 ?> 
			 
			 
			 
		</center>
	</div> 


<?php } ?>
</div>
</div>


<br />
<br />
<br />
<br />
<br />
<br />

<?php

include('includes\footer.php');

?>

	
</body>
</html>
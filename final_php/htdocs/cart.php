<?php

	require('includes\common.php');
	include('includes\header.php');

	if(!isset($_SESSION['email'])){
		
		header('location: login.php');
	
	}
	
$innerjoin_query="SELECT order_id,product_name,price FROM items INNER JOIN users_items ON items.id = users_items.item_id WHERE status ='Added to cart' ";
$innerjoin_result = mysqli_query($conn,$innerjoin_query);
	
	

?>

<div class="container" style="padding-top:90px;">
  <div class="row">
	
		<div class="">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S No</th>
        <th>Item Name</th>
        <th>Price</th>
        <th></th>
      </tr>
    </thead>
	
	<tbody>
	<?php
		$i=0;
		$sum=0;
		while ($row = mysqli_fetch_array($innerjoin_result)){
			$i++;
	?>
    
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['product_name'];?></td>
        <td> <?php echo 'Rs '.number_format($row['price'],2); 
				$sum+=$row['price'];
		?></td>
        <td><a <?php
		echo 'href="cart-remove.php?oid='.$row['order_id'].'"';
				?> class='remove_item_link'> Remove</a> </td>
      </tr>
	<?php
			
	}

	if($i!=0){
		
		echo '<tr>
        <td></td>
        <td>Total</td>
        <td>Rs '.number_format($sum,2).'</td>
        <td> <a href="success.php" class="btn btn-primary">Confirm Order</a> </td>
      </tr>';
	?>  
      
    <?php }
		else{
		echo '* No item in the cart';
	}?>  
    </tbody>
		
	
	
	
	
	
  </table>
</div>
</div>
</div>
<br />
<br />
<br />
<br />

<?php
	include('includes\footer.php');

?>


	
</body>
</html>
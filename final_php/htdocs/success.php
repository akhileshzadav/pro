<?php 
require('includes\common.php');
include('includes\header.php');
//Store form values into variables

$remove_cart_query = "UPDATE users_items SET status ='Confirmed' WHERE status ='Added to cart'  ";
$remove_cart_result = mysqli_query($conn, $remove_cart_query) or die(mysqli_error($conn));




?>

<div class="container "  style="padding-top:90px;">

<h1>Congratulations! </h1>
<p> Your order has been confirmed</p>
<a href="index.php">Click here</a> to go back 
</div>

<?php

include('includes\footer.php');

?>
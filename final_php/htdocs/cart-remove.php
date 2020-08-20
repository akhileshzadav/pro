<?php 
require('includes\common.php');

//Store form values into variables

$user_id = $_SESSION['id'];
$order_id = $_GET['oid'];

$remove_cart_query = "DELETE FROM users_items WHERE order_id ='$order_id'  ";
$remove_cart_result = mysqli_query($conn, $remove_cart_query) or die(mysqli_error($conn));

	
header('location: cart.php');


?>
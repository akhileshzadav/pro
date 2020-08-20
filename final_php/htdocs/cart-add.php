
<?php 
require('includes\common.php');

//Store form values into variables

$user_id = $_SESSION['id'];
$item_id = $_GET['pid'];

$add_cart_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart') ";
$mysqli_result = mysqli_query($conn, $add_cart_query) or die(mysqli_error($conn));

	
header('location: products.php');


?>
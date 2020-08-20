<?php 
require('includes\common.php');

//Store form values into variables

$email = $_SESSION['email'];
if($email==null){
	header('location: index.php');
}
$password = $_POST['old_password'];
$password_new = $_POST['new_password'];


$password_update_query = "UPDATE users SET password = '$password_new' WHERE email = '$email' AND password = '$password' ";
$mysqli_result = mysqli_query($conn, $password_update_query) or die(mysqli_error($conn));

header('location: products.php');
 


?>
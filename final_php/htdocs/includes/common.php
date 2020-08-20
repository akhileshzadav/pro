<?php

if(!isset($_SESSION)) 
{ 
        session_start(); 
} 



$servername = "localhost";
$username = "root";
$password = "";
$db = "store";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if  ($conn-> connect_error) {
    die("Connection failed: " . $conn-> connect_error);
} 


?>

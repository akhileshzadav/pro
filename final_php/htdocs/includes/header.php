<?php

$header0 = '<html lang="en">
<head>
  <title>LifeStyle Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link href="css/index.css" rel="stylesheet" type="text/css" /> 
  
  
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand " href="index.php">LifeStyle Store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
  
      <ul class="nav navbar-nav navbar-right">
		
	';
	  
	$header10 ='
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
	';

	$header11 ='
		 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>                     
		 <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>                     
		 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li> 
	';
	
	
	
	$header1='';
	
	if(isset($_SESSION['email'])){
			$header1=$header11;
				
	}else{
		$header1=$header10;
	}
	
	
	$header2 = '
		<li><a href="about.php"><span class="glyphicon glyphicon-globe"></span> About</a></li>
		<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact </a></li>
	
      </ul>
    </div>
  </div>
</nav>

';

echo $header0.$header1.$header2;

?>

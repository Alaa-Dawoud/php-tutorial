<?php
	session_start();
	
	$name = isset($_SESSION['name'])?$_SESSION['name']:'Guest';
	$email = isset($_SESSION['email'])?$_SESSION['email']:'not subscirbed';
?>
<!DOCTYPE html>
<html>
<head>
	<title>php session</title>
</head>
<body>
	<h1>hello <?php echo $name;?></h1>
	<h1><?php echo $email;?></h1>
</body>
</html>
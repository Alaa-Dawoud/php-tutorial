<?php
	session_start();
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>php sessions</title>
</head>
<body>
	<h1>Hello <?php echo $name?> You subscribed as <?php echo $email;?></h1>
	<a href="page3.php">Go to page 3</a>
</body>
</html>
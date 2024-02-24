<?php
	
	if(isset($_POST['submit'])){
		session_start();
		$name = htmlentities($_POST['name']);
		$email = htmlentities($_POST['email']);
		$_SESSION['name'] = $name;
		$_SESSION['email'] = $email;
		header('Location: page2.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Php Sessions</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="name" placeholder="Enter Name">
		<br>
		<input type="text" name="email" placeholder="Enter Email">
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>
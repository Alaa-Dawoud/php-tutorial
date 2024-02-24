<?php
	$name = '';
	if(isset($_GET['name'])){
		// print_r($_POST);
		// echo $_POST['email'];
		$name = htmlentities($_GET['name']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="POST", action="get_post.php">
		<div>
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<input type="submit" value="Submit">
	</form>
	<ul>
		<li><a href="get_post.php?name=ala">ala</a></li>
		<li><a href="get_post.php?name=ali">ali</a></li>
	</ul>
	<?php if ($name): ?>
	<h1><?php echo "{$name}'s Profile" ?></h1>
	<?php endif ?>
</body>
</html>
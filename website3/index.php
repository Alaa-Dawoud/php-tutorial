<?php
	$msg = '';
	$mgsClass = '';
	//check for submit
	if(filter_has_var(INPUT_POST, 'submit')){
		//get form data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		//check requierd fields
		if(!empty($name) && !empty($email) && !empty($message)){
			//passed
			if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
				//failed
				$msg = 'Please use a valid email';
				$mgsClass = 'alert-danger';
			}else{
				//passed
				//send the message
				// https://www.youtube.com/watch?v=tJ5eUgOxITE&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=15
				$msg = 'passed';
				$mgsClass = 'alert-success';
			}
			
		}else{
			//failed
			$msg = 'Please fill in all fields';
			$mgsClass = 'alert-danger';
		}


	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>
	</nav>
	<?php if($msg!=''): ?>
		<div class="alert <?php echo $mgsClass?>"><?php echo $msg?></div>
	<?php endif ?>
	<div class="container">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control"
				value="<?php echo isset($_POST['name'])? $name : ''; ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control"
				value="<?php echo isset($_POST['email'])?$email:''; ?>">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control"><?php echo isset($_POST['message'])?$message:''; ?></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>
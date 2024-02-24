<?php
	/*
	if(filter_has_var(INPUT_POST, 'data')){
		$email = $_POST['data'];
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		echo $email.'<br>';
		if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
			echo 'Email is valid';
		}else{
			echo 'Email is not valid';
		}
	}
	*/
	$var = array(
		"name" => 'alaa dawoud',
		"age" => "133",
		"email" =>"ala@example.com"
	);
	$filters = array(
		"name" =>array(
			"filter"=>FILTER_CALLBACK,
			"options"=>'ucwords'
		),
		"age"=>array(
			'filter'=>FILTER_VALIDATE_INT,
			'options'=>array(
				'min_range'=>1,
				'max_range'=>120
			)
		),
		"email"=>FILTER_VALIDATE_EMAIL
	);
	print_r(filter_var_array($var, $filters));
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data">
	<button type="subimt">Submit</button>
</form>
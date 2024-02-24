<?php

	$people = ['kevin'=>39, 'jeremy'=>29, 'sara'=>29];
	$people['nancy'] =28;
	// echo $people['nancy'];
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 29, 19),
		array('Ford', 48, 17)
	);
	// echo $cars[2][0];
	foreach ($people as $key => $value) {
		// echo 'name is : '.$key.'. age is : '.$value;
		// echo "</br>";
		echo nl2br("name is $key age is $value\n");
	}

?>
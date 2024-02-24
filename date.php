<?php
	// echo date('d');
	// echo "<br>";
	// echo date('m');
	// echo "<br>";
	// echo date('Y');
	// echo date('l');
	// echo date('m-d-Y');
	// echo date('a');
	// echo date('h:i:sa');
	$timestamp = strtotime('7:00pm March 22 2019');
	echo date('d/m/Y h:i:sa', $timestamp);
?>
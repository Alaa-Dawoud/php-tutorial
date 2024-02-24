<?php
	
	$num =6;
	// if($num == 5){
	// 	echo '5 passed';
	// }elseif($num ==6){
	// 	echo '6 passed';
	// }
	// else{
	// 	echo 'din not pass';
	// }
	if ($num >4 && $num<10){
		echo "$num passed";
	}
	$favColor = 'yellow';
	switch($favColor){
		case 'red':
			echo 'your favorite color is red';
			break;
		case 'blue':
			echo 'your favorite color is blue';
			break;
		case 'green':
			echo 'your favorite color is green';
			break;
		default:
			echo 'your favorite color is whatever';
	}
?>
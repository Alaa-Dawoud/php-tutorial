<?php
	// function simpleFunction(){
	// 	echo 'hello world';
	// }
	// // simpleFunction();
	// function sayHello($name='ahmed'){
		
	// 	echo "hello $name<br>";
	// 	return 'hello';
	// }
	// $out = sayHello('ali');
	// echo $out;
	$myNum = 10;
	function addFive($num){
		$num+=5;
	}
	function addTen(&$num){
		$num+=10;
	}
	addFive($myNum);
	echo "myNum is $myNum</br>";
	addTen($myNum);
	echo "myNum is $myNum</br>";
?>
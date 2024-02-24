<?php
		
	$str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris. Lobortis feugiat vivamus at augue. Pharetra convallis posuere morbi leo urna molestie at. Scelerisque varius morbi enim nunc faucibus a pellentesque sit. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Vitae elementum curabitur vitae nunc sed. Eu volutpat odio facilisis mauris sit amet massa vitae. Duis ut diam quam nulla. Volutpat est velit egestas dui id ornare arcu. Orci phasellus egestas tellus rutrum tellus pellentesque eu. Blandit massa enim nec dui nunc mattis enim. Lacus laoreet non curabitur gravida arcu ac. Cursus turpis massa tincidunt dui. Ut ornare lectus sit amet est placerat in egestas erat. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Convallis a cras semper";
	$output = gzcompress($str);
	// echo $output;
	$original = gzuncompress($output);
	echo $original;

?>
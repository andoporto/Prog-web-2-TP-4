<?php
	$input  = array("php", 4.0, array("verde", "rojo"));
	$reversed = array_reverse($input);
	$preserved = array_reverse($input, true);

	print_r($input);
	echo"<br>";
	print_r($reversed);
	echo"<br>";
	print_r($preserved);	
?>

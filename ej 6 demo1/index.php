
<?php
	$input = array("php", "mysql", "html", "css","js");
	//$reversed = array_reverse($input);

	foreach ($input as $elem)
	{
		echo "$elem";	
		echo"<br>";
	}
	echo"<br>";
	echo"<br>";	

	echo implode(" ",array_reverse($input))
	
?>

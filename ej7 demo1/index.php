<?php
	$pepe = array(23,35,54,12,34);
	echo "Array original";
	echo"<br>";
	foreach ($pepe as $elem)
	{
		echo "$elem";	
		echo" ";
	}
	echo"<br>";
	echo"<br>";
	echo max(1, 3, 5, 6, 7); 
	echo"<br>";
	echo max($pepe);

?>
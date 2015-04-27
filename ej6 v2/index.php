<?php
	$pepe = array("gato", "perro", "caballo", "pez","tomate");
	$reversed = array_reverse($pepe);

	echo "Array original";
	echo"<br>";
	foreach ($pepe as $elem)
	{
		echo "$elem";	
		echo" ";
	}
	echo"<br>";
	echo"<br>";
	echo "\t Array invertido";
	echo"<br>";	
	foreach ($reversed as $elem)
	{
		echo "$elem";
		echo"\t";	
		echo" ";
	}		
?>
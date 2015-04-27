<?php
	$pepe = array("gato", "perro", "caballo", "pez","tomate");
	$reversed = array_reverse($pepe);

	echo "Array original";
	echo"<br>";
	foreach ($pepe as $elem)
	{
		echo "$elem";	
		echo"<br>";
	}
	echo"<br>";
	echo "Array invertido";
	echo"<br>";	
	foreach ($reversed as $elem)
	{
		echo "$elem";	
		echo"<br>";
	}	
?>
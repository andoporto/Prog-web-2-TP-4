<?php
	$pepe = array(23,35,54,12,34);
	echo "Array original";
	echo "<br>";
	foreach ($pepe as $elem)
	{
		echo "$elem";	
		echo " ";
	}
	echo "<br>";	
	echo "<br>";
	echo "valor maximo: ";
	$maximo =max($pepe);
	echo $maximo;
	echo"<br>";	
	echo "valor minimo: ";
	$minimo = min($pepe);
	echo $minimo;
	echo"<br>";	
	echo "la multiplicacion es: ";
	$multi= $maximo*$minimo;
	echo $multi;
?>
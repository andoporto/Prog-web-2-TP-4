<html>
  <head>
    <title>Demo 2 TP 4 Ejercicio Nro. 1</title>
  </head>
  <body>
	<!-- Utilizando HTML y PHP, cree una p�gina que, seg�n la hora del d�a, 
	devuelva el texto �buenos dias� o �buenas tardes� o �buenas noches�. -->
	<?php

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$currentDateTime=date('m/d/Y H:i:s');
	
	// Antes del mediod�a, despues del mediod�a, AM o PM (may�sculas)
	$lit=date("A");	
	echo "$lit";
	echo"<br>";
	$stime=date("h").":".date("i");
	echo " $stime";		
	echo"<br>";	
	// Horario de 24 horas sin ceros, de 0 a 23
	$veinticuatro=date("G");
	echo "hola: $veinticuatro";
	echo"<br>";
	if($veinticuatro >=0 && $veinticuatro <7 )
	{
		echo "buenas noches";
		echo"<br>";
	}		
	else
	{
		echo"<br>";
		echo "buenos dias";
	}
	

?>
  </body>
</html>
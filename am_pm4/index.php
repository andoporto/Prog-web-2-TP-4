<?php

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$currentDateTime=date('m/d/Y H:i:s');
	$newDateTime = date('h:i A', strtotime($currentDateTime));
	echo $newDateTime; 
	echo"<br>";
	$stime=date("h").":".date("i");
	echo " $stime";
	$hora = date('h:i A');
	echo"<br>";
	echo "$hora";
	$literal = strtotime($currentDateTime);
	echo"<br>";
	echo"$literal";
	$literal2 = date(strtotime($currentDateTime));
	echo"<br>";
	echo"$literal2";
	echo"<br>";	
	// Antes del mediodía, despues del mediodía, am o pm (minúsculas)
	date("a");
	// Antes del mediodía, despues del mediodía, AM o PM (mayúsculas)
	$lit=date("A");
	echo "$lit";
	echo"<br>";	
	// Horario de 12 horas sin ceros, de 1 a 12
	date("g");
	// Horario de 12 horas con ceros, de 01 a 12
	date("h");
	// Horario de 24 horas sin ceros, de 0 a 23
	date("G");
	// Horario de 24 horas con ceros, de 01 a 23
	date("H");
	// minutos con ceros iniciales
	date("i");
	// segundos con ceros iniciales
	date("s");
	if($stime == "Hola")
	{
		echo "hola";
		echo"<br>";
	}		
	else
	{
		echo"<br>";
		echo "hcau";
	}
	

?>
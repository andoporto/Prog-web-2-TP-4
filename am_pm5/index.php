<?php

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$currentDateTime=date('m/d/Y H:i:s');
	$newDateTime = date('h:i A', strtotime($currentDateTime));
	echo "$currentDateTime";
	echo"<br>";	
	// Antes del mediodía, despues del mediodía, AM o PM (mayúsculas)
	$lit=date("A");
	echo "$lit";
	echo"<br>";	
	$stime=date("h").":".date("i");
	echo " $stime";
	echo"<br>";	
	if($lit == "PM")
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
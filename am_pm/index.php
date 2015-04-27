<?php
	//$fecha = date("g:i:s-a-d/m/Y"); 
	//echo "$fecha";
	
	$dateString = '08/04/2010 22:15:00';
	$dateObject = new DateTime($dateString);
	echo $dateObject->format('h:i A');
?>
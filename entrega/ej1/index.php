<html>
  <head>
    <title>TP 4 Ejercicio Nro. 1</title>
  </head>
  <body>
	<!-- Utilizando HTML y PHP, cree una p�gina que, seg�n la hora del d�a, 
	devuelva el texto �buenos dias� o �buenas tardes� o �buenas noches�. -->
	<?php

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$currentDateTime=date('m/d/Y H:i:s');
	
	// Antes del mediod�a, despues del mediod�a, AM o PM (may�sculas)

	$stime=date("h").":".date("i");
	echo " $stime";		
	$lit=date("A");	
	echo " $lit";
	echo"<br>";		
	$veinticuatro=date("G");
	//echo "$veinticuatro";		    
    if(($veinticuatro>=0 && $veinticuatro<=5)||($veinticuatro>=20 && $veinticuatro <=23))
       echo "<br> buenas noches <br>";
    if($veinticuatro>=6 && $veinticuatro<=11)
         echo "<br> buenos dias <br>";
    if($veinticuatro>=12 && $veinticuatro<=19)
         echo "<br> buenas tardes <br> ";
?>
  </body>
</html>
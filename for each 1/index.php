<?php

$equipo = array("portero"=>'Cech', "defensa"=>'Terry', "medio"=>'Lampard', "delantero"=>'Torres');
 
foreach($equipo as $posicion=>$jugador)
	{
	echo "El " . $posicion . " es " . $jugador;
	echo "<br>";
	}
	
	//así estaría accediento al valor de la clave delantero
	//echo "$equipo['delantero']";
	
?>
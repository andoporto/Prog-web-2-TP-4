<?php
	$pepe = array("gato", "perro", "caballo","pez","tomate");
	reset($pepe);
	while (list($clave, $valor) = each($pepe)) {
	    echo "Clave: $clave; Valor: $valor<br />\n";
	}
?>
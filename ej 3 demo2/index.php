
<?php
	$pepe = array("gato", "perro", "caballo", "tomate");
	foreach ($pepe as &$valor) 
	{
	    echo "$valor";
	    echo "<br>";
	}
?>

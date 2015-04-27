<?php
$pepe = array("gato", "perro", "caballo","pez","tomate");
$valor_a_encontrar="perro";
foreach ($pepe as $clave => $valor) 
{
  //  echo "Clave: $clave; Valor: $valor<br />\n";
    if($valor == $valor_a_encontrar)
    	echo "Clave: $clave; Valor: $valor<br />\n";
}
?>
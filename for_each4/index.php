<?php
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}

foreach ($array as &$valor) {
    echo "$valor";
    echo "<br>";
}


// $array ahora es array(2, 4, 6, 8)
//unset($valor); // rompe la referencia con el último elemento
?>
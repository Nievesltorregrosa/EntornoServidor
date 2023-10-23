<?php
// Declaramos las matrices
$matriz1 = array (array(1, 0), array (0, 1));

$matriz2 = array (array(0, 1), array (1, 0));

// Declaramos la matriz resultado
$resultado = array();


for ($i = 0; $i < count($matriz1); $i++) {
    for ($j = 0; $j < count($matriz1[$i]); $j++) { // Recorremos las columnas
    $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j]; // Sumamos los elementos de las matrices
    }
}

  // Recorremos la matriz
  foreach ($resultado as $fila) {
    foreach ($fila as $total) {
    echo $total . " ";
    }
    echo "<br>";
}
?>
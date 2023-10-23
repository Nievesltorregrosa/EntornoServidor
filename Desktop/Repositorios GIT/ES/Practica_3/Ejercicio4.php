<?php
 // Declaramos la matriz
$matriz = array(
    array(3, 1),
    array(2, 0)
    );

  // Recorremos la matriz
    foreach ($matriz as $fila) {

    // Recorremos las columnas
    foreach ($fila as $total) {

      // Mostramos la columna
    echo $total . " ";
    }
    echo "<br>";
}
?>
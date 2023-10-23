<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Obtenemos el precio de la cesta
$precio = $_POST["precio"];
$gastos_envio=0;

// Calculamos los gastos de envío
switch ($precio) {
    case $precio < 50:
        $gastos_envio = 3.95;
    break;
    case $precio >= 50 && $precio < 75:
        $gastos_envio = 2.95;
    break;
    case $precio >= 75 && $precio < 100:
        $gastos_envio = 1.95;
    break;
    default:
        $gastos_envio = 0;
}

// Mostramos los gastos de envío
echo "Los gastos de envío son de $gastos_envio €";
}
?>
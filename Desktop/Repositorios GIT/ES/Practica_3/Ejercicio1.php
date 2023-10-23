<?php 


if($_SERVER["REQUEST_METHOD"] == "POST") { //El formulario a sido enviado usando el metodo POST
    $Compra = $_POST["Compra"]; //Declaro la variable $Compra con el valor insertado en el formulario
    $gastosdeenvio=0; //

//Calculamos los gastos de envio 
    if ($Compra < 50) {
        $gastosdeenvio += 3.95;
    } else if ($Compra >= 50 && $Compra < 75) {
        $gastosdeenvio += 2.95;
    } else if ($Compra >= 75 && $Compra < 100) {
        $gastosdeenvio += 1.95;
    } else if ($Compra >= 100) {
        $gastosdeenvio = 0;
    }

//Mostramos los gastos de envio
echo "Los gastos de envio son ". number_format($gastosdeenvio,2) . "€"; 
}
?>
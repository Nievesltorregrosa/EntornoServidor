<?php

// Comprueba si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST["username"] === "admin" && $_POST["password"] === "1234") {
        session_start();
        $_SESSION['id_user'] = $_POST["username"];
        $_SESSION["login_time"] = date('Y-m-d H:i:s');
        $_SESSION["role"] = "admin";

        header("Location: Opciones.php");
        exit;

    } else if ($_POST["username"] === "cliente1" && $_POST["password"] === "1234") {
        session_start();
        $_SESSION['id_user'] = $_POST["username"];
        $_SESSION["login_time"] = date('Y-m-d H:i:s');
        $_SESSION["role"] = "cliente1";
        header("Location: Opciones.php");
        exit;
    } else {
        header("Location: index.html");
        exit;
    }
}
?>

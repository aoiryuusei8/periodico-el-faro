<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'controllers/MainController.php';
$controller = new MainController();
$alerta = "";

// Detectar si se envió un formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_GET['action']) && $_GET['action'] == 'registrar') {
        $alerta = $controller->nuevoRegistro($_POST['nombre_usuario'], $_POST['email_usuario']);
    } 
    elseif (isset($_GET['action']) && $_GET['action'] == 'contactar') {
        $alerta = $controller->nuevoContacto($_POST['nom'], $_POST['em'], $_POST['msg']);
    }
}

// Cargar la vista (tu código HTML original)
include 'views/home.php';

// Si hay una respuesta del controlador, mostrarla en un alert de JS
if ($alerta != "") {
    echo "<script>alert('$alerta');</script>";
}
?>
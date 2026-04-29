<?php
require_once 'Models/Entidades.php';

class MainController {
    public function nuevoRegistro($nombre, $correo) {
        $lector = new Lector();
        $lector->nombre = htmlspecialchars($nombre);
        $lector->correo = htmlspecialchars($correo);
        return $lector->registrarCuenta();
    }

    public function nuevoContacto($nombre, $email, $mensaje) {
        $contacto = new Contacto();
        $contacto->nombre_remitente = htmlspecialchars($nombre);
        $contacto->email_remitente = htmlspecialchars($email);
        $contacto->mensaje = htmlspecialchars($mensaje);
        return $contacto->enviarMensaje();
    }
}
?>

<?php
require_once 'Models/Entidades.php';

class MainController {
    public function nuevoRegistro($nombre, $correo) {
        $lector = new Lector();
        $lector->nombre = $nombre;
        $lector->correo = $correo;
        return $lector->registrarCuenta();
    }

    public function nuevoContacto($nombre, $email, $mensaje) {
        $contacto = new Contacto();
        $contacto->nombre_remitente = $nombre;
        $contacto->email_remitente = $email;
        $contacto->mensaje = $mensaje;
        return $contacto->enviarMensaje();
    }
}
?>
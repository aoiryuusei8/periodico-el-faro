<?php
// Models/Entidades.php

class Usuario {
    public $id_usuario;
    public $nombre;
    public $correo;
    public $password;
    public $fecha_registro;

    public function iniciarSesion() { return "Sesión iniciada"; }
    public function cerrarSesion() { return "Sesión cerrada"; }
    public function recuperarContrasena() { return "Correo enviado"; }
}

class Lector extends Usuario {
    public function registrarCuenta() {
        return "Cuenta de lector creada para: " . $this->nombre;
    }
}

class Moderador extends Usuario {
    public function gestionarArticulo() { return "Artículo gestionado"; }
    public function aprobarComentario() { return "Comentario aprobado"; }
}

class Articulo {
    public $idarticulo;
    public $titulo;
    public $cuerpo;
    public $categoria;

    public function publicar() { return "Publicado"; }
    public function editar() { return "Editado"; }
    public function eliminar() { return "Eliminado"; }
}

class Suscripcion {
    public $id_suscripcion;
    public $tipo_plan;
    public $precio;
    public $estado;
    public $fecha_vencimiento;

    public function activarPlan() { return "Plan activado"; }
    public function renovar() { return "Plan renovado"; }
    public function cancelarPlan() { return "Plan cancelado"; }
}

class Contacto {
    public $nombre_remitente;
    public $email_remitente;
    public $mensaje;

    public function enviarMensaje() {
        return "Mensaje enviado con éxito por " . $this->nombre_remitente;
    }
}
?>
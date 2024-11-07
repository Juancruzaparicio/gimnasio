<?php

require_once "modelos/entrenadores.php";

class EntrenadorControlador{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Entrenador;
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/entrenadores/entrenadoreslista.php";
        require_once "vistas/pie.php";
    }

    public function FormCrearEntrenador(){
        $titulo='Registrar';
        $p= new Entrenador();
        if(isset($_GET['id'])){
            $p=$this->modelo->ObtenerEntrenador($_GET['id']);
            $titulo='Modificar';
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/entrenadores/form.php";
        require_once "vistas/pie.php";
    }

    public function GuardarEntrenador(){
        $p=new Entrenador();
        $p->setId_entrenador(intval($_POST['id']));
        $p->setDni($_POST['dni_entrenador']);
        $p->setNombre($_POST['nombre_entrenador']);
        $p->setApellido($_POST['apellido_entrenador']);
        $p->setTelefono($_POST['telefono_entrenador']);
        $p->setMail($_POST['mail_entrenador']);
        $p->setEspecialidad($_POST['especialidad']);
        $p->setFechacontratacion($_POST['fecha_contranacion_entrenador']);
        $p->setEstado($_POST['estado_entrenador']);

        $p->getId_entrenador() > 0 ?
        $this->modelo->ActualizarEntrenador($p) :
        $this->modelo->InsertarEntrenador($p);

        header("location:?c=entrenador");
    }

    public function BorrarEntrenador(){
        $this->modelo->EliminarEntrenador($_GET['id']);
        header("location:?c=entrenador");
    }
}
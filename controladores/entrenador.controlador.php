<?php

require_once "modelos/entrenadores.php";

class EntrenadorControlador{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Entrenador;
    }

    public function Inicio(){
        $entrenador = $this->modelo->mdlListarEntrenador();
        require_once "vistas/encabezado.php";
        require_once "vistas/entrenadores/entrenadoreslista.php";
        require_once "vistas/pie.php";
    }

    public function ctrFormCrearEntrenador(){
        $titulo='Registrar';
        $p= new Entrenador();
        if(isset($_GET['id'])){
            $p=$this->modelo->mdlObtenerEntrenador($_GET['id']);
            $titulo='Modificar';
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/entrenadores/form.php";
        require_once "vistas/pie.php";
    }

    public function ctrGuardarEntrenador(){
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
        $this->modelo->mdlActualizarEntrenador($p) :
        $this->modelo->mdlInsertarEntrenador($p);

        header("location:?c=entrenador");
    }

    public function ctrBorrarEntrenador(){
        $this->modelo->mdlEliminarEntrenador($_GET['id']);
        header("location:?c=entrenador");
    }
}
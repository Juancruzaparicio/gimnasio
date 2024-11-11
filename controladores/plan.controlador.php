<?php

require_once "modelos/plan.php";

class PlanControlador{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Plan();
    }

    public function Inicio(){
        $plan = $this->modelo->mdlListarPlan();
        require_once "vistas/encabezado.php";
        require_once "vistas/plan/planlista.php";
        require_once "vistas/pie.php";
    }

    public function ctrFormCrearPlan(){
        $titulo='Registrar';
        $p= new Plan();
        if(isset($_GET['id'])){
            $p=$this->modelo->mdlObtenerPlan($_GET['id']);
            $titulo='Modificar';
        }
        $entrenadores = $this->modelo->mdlObtenerEntrenador();

        require_once "vistas/encabezado.php";
        require_once "vistas/plan/form.php";
        require_once "vistas/pie.php";
    }

    public function ctrGuardarPlan(){
        $p=new Plan();
        $p->setId_plan(intval($_POST['id']));
        $p->setNombre($_POST['nombre_plan']);
        $p->setCodigo($_POST['codigo_plan']);
        $p->setDescripcion($_POST['descripcion_plan']);
        $p->setDuracion_semanas($_POST['duracion']);
        $p->setCantidadsesiones_semana($_POST['sesiones']);
        $p->setId_entrenador($_POST['id_entrenador_plan']);

        $p->getId_plan() > 0 ?
        $this->modelo->mdlActualizarPlan($p) :
        $this->modelo->mdlInsertarPlan($p);

        header("location:?c=plan");
    }

    public function ctrBorrarPlan(){
        $this->modelo->mdlEliminarPlan($_GET['id']);
        header("location:?c=plan");
    }
}
<?php

require_once "modelos/plan.php";

class PlanControlador{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Plan();
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/plan/planlista.php";
        require_once "vistas/pie.php";
    }

    public function FormCrearPlan(){
        $titulo='Registrar';
        $p= new Plan();
        if(isset($_GET['id'])){
            $p=$this->modelo->ObtenerPlan($_GET['id']);
            $titulo='Modificar';
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/plan/form.php";
        require_once "vistas/pie.php";
    }

    public function GuardarPlan(){
        $p=new Plan();
        $p->setId_plan(intval($_POST['id']));
        $p->setNombre($_POST['nombre_plan']);
        $p->setCodigo($_POST['codigo_plan']);
        $p->setDescripcion($_POST['descripcion_plan']);
        $p->setDuracion_semanas($_POST['duracion']);
        $p->setCantidadsesiones_semana($_POST['sesiones']);
        $p->setId_entrenador($_POST['entrenador']);

        $p->getId_plan() > 0 ?
        $this->modelo->ActualizarPlan($p) :
        $this->modelo->InsertarPlan($p);

        header("location:?c=plan");
    }

    public function BorrarPlan(){
        $this->modelo->EliminarPlan($_GET['id']);
        header("location:?c=plan");
    }
}
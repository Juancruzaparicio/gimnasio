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
}
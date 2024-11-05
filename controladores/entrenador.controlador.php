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
}
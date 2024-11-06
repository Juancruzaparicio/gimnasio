<?php

require_once "modelos/pagos.php";

class PagoControlador{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Pago();
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/pagos/pagoslista.php";
        require_once "vistas/pie.php";
    }
}
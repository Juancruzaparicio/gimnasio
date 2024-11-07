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

    public function FormCrearPago(){
        $titulo='Registrar';
        $p= new Pago();
        if(isset($_GET['id'])){
            $p=$this->modelo->ObtenerPago($_GET['id']);
            $titulo='Modificar';
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/pagos/form.php";
        require_once "vistas/pie.php";
    }

    public function GuardarPago(){
        $p=new Pago();
        $p->setId_pago(intval($_POST['id']));
        $p->setId_cliente($_POST['cliente']);
        $p->setMonto_pagado($_POST['monto']);
        $p->setMetodo_pago($_POST['metodo']);
        $p->setId_plan($_POST['plan']);
        $p->setEstado_pago($_POST['estado']);
        $p->setFecha_pago($_POST['fecha']);

        $p->getId_Pago() > 0 ?
        $this->modelo->ActualizarPago($p) :
        $this->modelo->InsertarPago($p);

        header("location:?c=pago");
    }

    public function BorrarPago(){
        $this->modelo->EliminarPago($_GET['id']);
        header("location:?c=pago");
    }
}
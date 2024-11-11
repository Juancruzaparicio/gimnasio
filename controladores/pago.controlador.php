<?php

require_once "modelos/pagos.php";

class PagoControlador{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Pago();
    }

    public function Inicio(){
        $pagos = $this->modelo->mdlListarPagos();
        require_once "vistas/encabezado.php";
        require_once "vistas/pagos/pagoslista.php";
        require_once "vistas/pie.php";
    }

    public function ctrFormCrearPago(){
        $titulo='Registrar';
        $p= new Pago();
        if(isset($_GET['id'])){
            $p=$this->modelo->mdlObtenerPago($_GET['id']);
            $titulo='Modificar';
        }
        $clientes = $this->modelo->mdlObtenerClientes();
        $planes = $this->modelo->mdlObtenerPlanes();

        require_once "vistas/encabezado.php";
        require_once "vistas/pagos/form.php";
        require_once "vistas/pie.php";
    }

    public function ctrGuardarPago(){
        $p=new Pago();
        $p->setId_pago(intval($_POST['id']));
        $p->setId_cliente($_POST['id_cliente_pago']);
        $p->setMonto_pagado($_POST['monto']);
        $p->setMetodo_pago($_POST['metodo']);
        $p->setId_plan($_POST['id_plan_pago']);
        $p->setEstado_pago($_POST['estado']);
        $p->setFecha_pago($_POST['fecha']);

        $p->getId_Pago() > 0 ?
        $this->modelo->mdlActualizarPago($p) :
        $this->modelo->mdlInsertarPago($p);

        header("location:?c=pago");
    }

    public function ctrBorrarPago(){
        $this->modelo->mdlEliminarPago($_GET['id']);
        header("location:?c=pago");
    }
}
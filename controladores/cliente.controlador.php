<?php

require_once "modelos/clientes.php";

class ClienteControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Cliente;
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/clientes/index.php";
        require_once "vistas/pie.php";
    }

    public function FormCrearClientes(){
        require_once "vistas/encabezado.php";
        require_once "vistas/clientes/form.php";
        require_once "vistas/pie.php";
    }

    public function GuardarCliente(){
        $p=new Cliente();
        $p->setId_cliente(intval($_POST['id']));
        $p->setDni($_POST['dni_cliente']);
        $p->setNombre($_POST['nombre_cliente']);
        $p->setApellido($_POST['apellido_cliente']);
        $p->setTelefono($_POST['telefono_cliente']);
        $p->setMail($_POST['mail_cliente']);
        $p->setFecha_nacimiento($_POST['fecha_nacimiento_cliente']);
        $p->setDireccion($_POST['direccion_cliente']);
        $p->setFecha_inscripcion($_POST['fecha_inscripcion_cliente']);
        $p->setId_plan($_POST['id_plan_cliente']);
        $p->setEstado($_POST['estado_cliente']);

        $this->modelo->InsertarCliente($p);

        //header("location:?c=producto");
    }
}
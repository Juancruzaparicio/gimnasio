<?php

class Pago{

    private $pdo;

    private $id_pago;
    private $id_cliente;
    private $monto_pagado;
    private $metodo_pago;
    private $id_plan;
    private $estado_pago;
    private $fecha_pago;

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getId_pago() : ?int{
        return $this->id_pago;
    }

    public function setId_pago(int $id){
        $this->id_pago=$id;
    }

    public function getId_cliente() : ?int{
        return $this->id_cliente;
    }

    public function setId_cliente(int $id){
        $this->id_cliente=$id;
    }

    public function getMonto_pagado() : ?int{
        return $this->monto_pagado;
    }

    public function setMonto_pagado(int $monto){
        $this->monto_pagado=$monto;
    }

    public function getMetodo_pago() : ?string{
        return $this->metodo_pago;
    }

    public function setMetodo_pago(string $metodo){
        $this->metodo_pago=$metodo;
    }

    public function getId_plan() : ?int{
        return $this->id_plan;
    }

    public function setId_plan(int $plan){
        $this->id_plan=$plan;
    }

    public function getEstado_pago() : ?string{
        return $this->estado_pago;
    }

    public function setEstado_pago(string $estado){
        $this->estado_pago=$estado;
    }

    public function getFecha_pago() : ?string{
        return $this->fecha_pago;
    }

    public function setFecha_pago(string $fecha){
        $this->fecha_pago=$fecha;
    }

    public function ListarPagos(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM pagos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
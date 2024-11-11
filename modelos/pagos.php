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

    public function mdlListarPagos(){
        try{
            $consulta=$this->pdo->prepare("SELECT p.id_pago, c.nombre as nombre_cliente, c.apellido as apellido_cliente, p.monto_pagado, p.metodo_pago, p2.nombre as nombre_plan, 
                                            p.estado_pago, p.fecha_pago  
                                            FROM pagos AS p 
                                            INNER JOIN clientes AS c ON c.id_cliente = p.id_cliente
                                            INNER JOIN plan_entrenamiento AS p2 ON p2.id_plan = p.id_plan;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function mdlInsertarPago(pago $p){
        try{
            $consulta=$this->pdo->prepare("INSERT INTO pagos(id_pago,id_cliente,monto_pagado,metodo_pago,id_plan,estado_pago,fecha_pago) 
            VALUES (?,?,?,?,?,?,?);");
            $consulta->execute(array(
                $p->getId_pago(),
                $p->getId_cliente(),
                $p->getMonto_pagado(),
                $p->getMetodo_pago(),
                $p->getId_plan(),
                $p->getEstado_pago(),
                $p->getFecha_pago(),
            ));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function mdlObtenerPago($id){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM pagos WHERE id_pago = ?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new Pago();
            $p->setId_pago($r->id_pago);
            $p->setId_cliente($r->id_cliente);
            $p->setMonto_pagado($r->monto_pagado);
            $p->setMetodo_pago($r->metodo_pago);
            $p->setId_plan($r->id_plan);
            $p->setEstado_pago($r->estado_pago);
            $p->setFecha_pago($r->fecha_pago);
            return $p;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function mdlActualizarPago(Pago $p){
        try{
            $consulta=$this->pdo->prepare("UPDATE pagos SET
                id_cliente=?,
                monto_pagado=?,
                metodo_pago=?,
                id_plan=?,
                estado_pago=?,
                fecha_pago=?
                WHERE id_pago=?;");
            $consulta->execute(array(
                $p->getId_cliente(),
                $p->getMonto_pagado(),
                $p->getMetodo_pago(),
                $p->getId_plan(),
                $p->getEstado_pago(),
                $p->getFecha_pago(),
                $p->getId_pago()
                

            ));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function mdlEliminarPago($id){
        try{
            $consulta=$this->pdo->prepare("DELETE FROM pagos WHERE id_pago=?;");
            $consulta->execute(array($id));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function mdlObtenerPlanes() {
        try {
            $consulta = $this->pdo->prepare("SELECT id_plan, nombre FROM plan_entrenamiento;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ); // Devuelve los planes como un arreglo de objetos
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mdlObtenerClientes(){
        try{
            // Consulta que trae el id, nombre y apellido de los clientes
            $consulta = $this->pdo->prepare("SELECT id_cliente, nombre, apellido FROM clientes;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
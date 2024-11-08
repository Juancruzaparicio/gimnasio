<?php

class Plan{

    private $pdo;

    private $id_plan;
    private $nombre;
    private $codigo;
    private $descripcion;
    private $duracion_semanas;
    private $cantidadsesiones_semana;
    private $id_entrenador;

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getId_plan() : ?int{
        return $this->id_plan;
    }

    public function setId_plan(int $plan){
        $this->id_plan=$plan;
    }

    public function getNombre() : ?string{
        return $this->nombre;
    }

    public function setNombre(string $nom){
        $this->nombre=$nom;
    }

    public function getCodigo() : ?int{
        return $this->codigo;
    }

    public function setCodigo(int $cod){
        $this->codigo=$cod;
    }

    public function getDescripcion() : ?string{
        return $this->descripcion;
    }

    public function setDescripcion(string $des){
        $this->descripcion=$des;
    }

    public function getDuracion_semanas() : ?int{
        return $this->duracion_semanas;
    }

    public function setDuracion_semanas(int $duracion){
        $this->duracion_semanas=$duracion;
    }

    public function getCantidadsesiones_semana() : ?int{
        return $this->cantidadsesiones_semana;
    }

    public function setCantidadsesiones_semana(int $cantidad){
        $this->cantidadsesiones_semana=$cantidad;
    }

    public function getId_entrenador() : ?int{
        return $this->id_entrenador;
    }

    public function setId_entrenador(int $entrenador){
        $this->id_entrenador=$entrenador;
    }

    public function ListarPlan(){
        try{
            $consulta=$this->pdo->prepare("SELECT p.id_plan, p.nombre, p.codigo, p.descripcion, p.duracion_semanas, p.cantidadsesiones_semana, e.nombre as nombre_entrenador, 
                                            e.apellido as apellido_entrenador 
                                            FROM plan_entrenamiento AS p 
                                            INNER JOIN entrenadores AS e ON e.id_entrenador = p.id_entrenador;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function InsertarPlan(Plan $p){
        try{
            $consulta=$this->pdo->prepare("INSERT INTO plan_entrenamiento(id_plan,nombre,codigo,descripcion,duracion_semanas,cantidadsesiones_semana,id_entrenador) 
            VALUES (?,?,?,?,?,?,?);");
            $consulta->execute(array(
                $p->getId_plan(),
                $p->getNombre(),
                $p->getCodigo(),
                $p->getDescripcion(),
                $p->getDuracion_semanas(),
                $p->getCantidadsesiones_semana(),
                $p->getId_entrenador()
            ));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function ObtenerPlan($id){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM plan_entrenamiento WHERE id_plan = ?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new Plan();
            $p->setId_plan($r->id_plan);
            $p->setNombre($r->nombre);
            $p->setCodigo($r->codigo);
            $p->setDescripcion($r->descripcion);
            $p->setDuracion_semanas($r->duracion_semanas);
            $p->setCantidadsesiones_semana($r->cantidadsesiones_semana);
            $p->setId_entrenador($r->id_entrenador);

            return $p;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function ActualizarPlan(Plan $p){
        try{
            $consulta=$this->pdo->prepare("UPDATE plan_entrenamiento SET
                nombre=?,
                codigo=?,
                descripcion=?,
                duracion_semanas=?,
                cantidadsesiones_semana=?,
                id_entrenador=?
                WHERE id_plan=?;");
            $consulta->execute(array(
                $p->getNombre(),
                $p->getCodigo(),
                $p->getDescripcion(),
                $p->getDuracion_semanas(),
                $p->getCantidadsesiones_semana(),
                $p->getId_entrenador(),
                $p->getId_plan()
                

            ));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function EliminarPlan($id){
        try{
            $consulta=$this->pdo->prepare("DELETE FROM plan_entrenamiento WHERE id_plan=?;");
            $consulta->execute(array($id));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function ObtenerEntrenador(){
        try{
            // Consulta que trae el id, nombre y apellido de los clientes
            $consulta = $this->pdo->prepare("SELECT id_entrenador, nombre, apellido FROM entrenadores;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
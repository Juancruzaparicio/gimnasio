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
            $consulta=$this->pdo->prepare("SELECT * FROM plan_entrenamiento;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
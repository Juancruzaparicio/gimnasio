<?php

class Entrenador{

    private $pdo;

    private $id_entrenador;
    private $dni;
    private $nombre;
    private $apellido;
    private $telefono;
    private $mail;
    private $especialidad;
    private $fecha_contratacion;
    private $estado;
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getId_entrenador() : ?int{
        return $this->id_entrenador;
    }

    public function setId_cliente(int $id){
        $this->id_entrenador=$id;
    }

    public function getDni() : ?int{
        return $this->dni;
    }

    public function setDni(int $dni_){
        $this->dni=$dni_;
    }

    public function getNombre() : ?string{
        return $this->nombre;
    }

    public function setNombre(string $nombre_){
        $this->nombre=$nombre_;
    }

    public function getApellido() : ?string{
        return $this->apellido;
    }

    public function setApellido(int $apellido_){
        $this->apellido=$apellido_;
    }

    public function getTelefono() : ?int{
        return $this->telefono;
    }

    public function setTelefono(int $telefono_){
        $this->telefono=$telefono_;
    }

    public function getMail() : ?string{
        return $this->mail;
    }

    public function setMail(string $mail_){
        $this->mail=$mail_;
    }

    public function getEspecialidad() : ?string{
        return $this->especialidad;
    }

    public function setEspecialidad(int $especialidad_){
        $this->especialidad=$especialidad_;
    }

    public function getFechacontratacion() : ?Date{
        return $this->fecha_contratacion;
    }

    public function setFechacontratacion(date $fecha_contratacion_){
        $this->fecha_contratacion = $fecha_contratacion_;
    }

    public function getEstado() : ?string{
        return $this->estado;
    }

    public function setEstado(int $estado_){
        $this->estado=$estado_;
    }

    public function Listar(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM entrenadores;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
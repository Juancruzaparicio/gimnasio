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

    public function setId_entrenador(int $id){
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

    public function setApellido(string $apellido_){
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

    public function setEspecialidad(string $especialidad_){
        $this->especialidad=$especialidad_;
    }

    public function getFechacontratacion() : ?string{
        return $this->fecha_contratacion;
    }

    public function setFechacontratacion(string $fecha_contratacion_){
        $this->fecha_contratacion = $fecha_contratacion_;
    }

    public function getEstado() : ?string{
        return $this->estado;
    }

    public function setEstado(string $estado_){
        $this->estado=$estado_;
    }

    public function mdlListarEntrenador(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM entrenadores;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function mdlInsertarEntrenador(Entrenador $p){
        try{
            $consulta=$this->pdo->prepare("INSERT INTO entrenadores(id_entrenador,dni,nombre,apellido,telefono,mail,especialidad,fecha_contratacion,estado) 
            VALUES (?,?,?,?,?,?,?,?,?);");
            $consulta->execute(array(
                $p->getId_entrenador(),
                $p->getDni(),
                $p->getNombre(),
                $p->getApellido(),
                $p->getTelefono(),
                $p->getMail(),
                $p->getEspecialidad(),
                $p->getFechacontratacion(),
                $p->getEstado()
                

            ));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function mdlObtenerEntrenador($id){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM entrenadores WHERE id_entrenador = ?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new Entrenador();
            $p->setId_entrenador($r->id_entrenador);
            $p->setDni($r->dni);
            $p->setNombre($r->nombre);
            $p->setApellido($r->apellido);
            $p->setTelefono($r->telefono);
            $p->setMail($r->mail);
            $p->setEspecialidad($r->especialidad);
            $p->setFechacontratacion($r->fecha_contratacion	);
            $p->setEstado($r->estado);

            return $p;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function mdlActualizarEntrenador(Entrenador $p){
        try{
            $consulta=$this->pdo->prepare("UPDATE entrenadores SET
                dni=?,
                nombre=?,
                apellido=?,
                telefono=?,
                mail=?,
                especialidad=?,
                fecha_contratacion=?,
                estado=?
                WHERE id_entrenador=?;");
            $consulta->execute(array(
                $p->getDni(),
                $p->getNombre(),
                $p->getApellido(),
                $p->getTelefono(),
                $p->getMail(),
                $p->getEspecialidad(),
                $p->getFechacontratacion(),
                $p->getEstado(),
                $p->getId_entrenador()
                

            ));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function mdlEliminarEntrenador($id){
        try{
            $consulta=$this->pdo->prepare("DELETE FROM entrenadores WHERE id_entrenador=?;");
            $consulta->execute(array($id));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
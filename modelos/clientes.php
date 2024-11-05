<?php

class Cliente{

    private $pdo;

    private $id_cliente;
    private $dni;
    private $nombre;
    private $apellido;
    private $telefono;
    private $mail;
    private $fecha_nacimiento;
    private $direccion;
    private $fecha_inscripcion;
    private $id_plan;
    private $estado;

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getId_cliente() : ?int{
        return $this->id_cliente;
    }

    public function setId_cliente(int $id){
        $this->id_cliente=$id;
    }

    public function getDni() : ?int{
        return $this->dni;
    }

    public function setDni(int $documento){
        $this->dni=$documento;
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

    public function getFecha_nacimiento() : ?string{
        return $this->fecha_nacimiento;
    }

    public function setFecha_nacimiento(?string $fecha_nacimiento_){
        if($fecha_nacimiento_){ 
            $f = explode('-', $fecha_nacimiento_);
            $this->fecha_nacimiento = $f[2]."-".$f[0]."-".$f[1];
        }else {
            $this->fecha_nacimiento = null;  // Si es null, lo almacena como null
        }
    }

    public function getDireccion() : ?string{
        return $this->direccion;
    }

    public function setDireccion(string $direccion_){
        $this->direccion=$direccion_;
    }

    public function getFecha_inscripcion() : ?string{
        return $this->fecha_inscripcion;
    }

    public function setFecha_inscripcion(string $fecha_inscripcion_){
        if($fecha_inscripcion_){ 
            $f = explode('-', $fecha_inscripcion_);
            $this->fecha_inscripcion = $f[2]."-".$f[0]."-".$f[1];
        }else {
            $this->fecha_inscripcion = null;  // Si es null, lo almacena como null
        }
    }

    public function getId_plan() : ?int{
        return $this->id_plan;
    }

    public function setId_plan(int $id_){
        $this->id_plan=$id_;
    }

    public function getEstado() : ?string{
        return $this->estado;
    }

    public function setEstado(string $estado_){
        $this->estado=$estado_;
    }

    public function Cantidad_clientes(){
        try{
            $consulta=$this->pdo->prepare("SELECT sum(id_plan) AS cantidad FROM clientes;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Listar(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM clientes;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function InsertarCliente(Cliente $p){
        try{
            $consulta=$this->pdo->prepare("INSERT INTO clientes(id_cliente,dni,nombre,apellido,telefono,mail,fecha_nacimiento,direccion,fecha_inscripcion,id_plan,estado) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?);");
            $consulta->execute(array(
                $p->getId_cliente(),
                $p->getDni(),
                $p->getNombre(),
                $p->getApellido(),
                $p->getTelefono(),
                $p->getMail(),
                $p->getFecha_nacimiento(),
                $p->getDireccion(),
                $p->getFecha_inscripcion(),
                $p->getId_plan(),
                $p->getEstado()
                

            ));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
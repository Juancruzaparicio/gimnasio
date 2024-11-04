<?php

class BasedeDatos{
    const servidor="localhost";
    const usuariobd="root";
    const clave="";
    const nombrebd="gimnasio";

    public static function Conectar(){
        try{
            $coneccion = new PDO("mysql:host=".self::servidor.";dbname=".self::nombrebd.";charset=utf8",self::usuariobd,self::clave);

            $coneccion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $coneccion;
        }catch(PDOException $e){
            return "fallo".$e->getMessage();
        }
    }
}
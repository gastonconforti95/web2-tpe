<?php

class JugadoresModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=seleccion;charset=utf8', 'root', '');
    }
         
    function GetJugadores(){
        $sentencia = $this->db->prepare("SELECT * FROM jugador");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }

    function GetPosiciones(){
        $sentencia = $this->db->prepare("SELECT * FROM posicion");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }
      
    function GetJugador($id){
        $sentencia = $this->db->prepare("SELECT * FROM posicion INNER JOIN jugador ON jugador.id_posicion_fk=posicion.id where jugador.id=?");
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getPosicionFiltrada($id){
      $sentencia = $this->db->prepare("SELECT * FROM posicion INNER JOIN jugador ON jugador.id_posicion_fk=posicion.id where posicion.id=?");
      $sentencia->execute([$id]);
      return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}
?>

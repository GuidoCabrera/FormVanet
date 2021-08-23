<?php

class Cliente{

 private $id;
 private $nombre;
 private $apellido;
 private $direccion;
 private $localidad;
 private $telefono;
 private $email;

 function __construct($id,$nombre,$apellido,$direccion,$localidad,$telefono,$email){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->localidad = $localidad;
        $this->telefono = $telefono;
        $this->email = $email;
 }

function getId(){
    echo $this->id;
}
 function getNom(){
     echo $this->nombre;
 }
 function getApe(){
     echo $this->apellido;
 }
 function getDirec(){
     echo $this->direccion;
 }
 function getLoc(){
     echo $this->localidad;
 }
 function getTel(){
     echo $this->telefono;
 }
 function getMail(){
     echo $this->email;
 }
 
}
?>
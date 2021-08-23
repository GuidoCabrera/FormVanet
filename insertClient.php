<?php

include_once 'database.php';

if(!empty($_POST['name'])&&!empty($_POST['surname'])&&!empty($_POST['direction'])&&!empty($_POST['location'])&&!empty($_POST['phone'])&&!empty($_POST['email'])){
    // $name = $_POST['name'];
    // $surname = $_POST['surname'];
    // $direction = $_POST['direction'];
    // $location = $_POST['location'];
    // $phone = $_POST['phone'];
    // $email = $_POST['email'];
    //  print_r($name."-".$surname."-".$direction."-".$location."-".$phone."-".$email);

    $db = new Database();
    $query = $db->connect();
    // print_r($query);
    $stmt = $query->prepare('INSERT INTO clientes(nombre,apellido,direccion,localidad,telefono,email) VALUES(:nombre,:apellido,:direccion,:localidad,:telefono,:email)');
    $name = ucfirst($_POST['name']);
    $surname = ucfirst($_POST['surname']);
    $direction = ucfirst($_POST['direction']);
    $location = ucfirst($_POST['location']);
    $stmt->bindParam(":nombre",$name);
    $stmt->bindParam(":apellido",$surname);
    $stmt->bindParam(":direccion",$direction);
    $stmt->bindParam(":localidad",$location);
    $stmt->bindParam(":telefono",$_POST['phone']);
    $stmt->bindParam(":email",$_POST['email']);
    $stmt->execute();
}

require 'index.php';
header('Location: http://localhost/PHP/FormVanet/');

?>
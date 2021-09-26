<?php

include_once 'database.php';

if(!empty($_POST['name'])&&!empty($_POST['surname'])&&!empty($_POST['direction'])&&!empty($_POST['location'])&&!empty($_POST['phone'])&&!empty($_POST['email'])){
    $db = new Database();
    $query = $db->connect();
    $name = ucfirst($_POST['name']);
    $surname = ucfirst($_POST['surname']);
    $direction = ucfirst($_POST['direction']);
    $location = ucfirst($_POST['location']);
    $phone = $_POST['phone'];
    $email =  $_POST['email'];
    $stmt = $query->prepare("INSERT INTO clientes(nombre,apellido,direccion,localidad,telefono,email) VALUES('$name','$surname','$direction','$location','$phone','$email')");
    $stmt->execute();
}
require 'index.php';
header('Location:'.constant('URL'));
?>
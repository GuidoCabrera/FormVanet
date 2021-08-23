<?php

include_once 'database.php';
include_once 'Client.php';

function mostrarBuscados(){

    $busqueda = ucfirst($_POST['search']);
   
       $db = new Database;
       $query = $db->connect();
       $stmt = $query->prepare("SELECT * FROM clientes WHERE CONCAT_WS(' ', Nombre, Apellido) LIKE  '%$busqueda%' OR
       CONCAT_WS(' ', Apellido, Nombre) LIKE  '%$busqueda%' OR Direccion LIKE '%$busqueda%'");
       $stmt->execute();

       while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
         $client2 = new Cliente($result['IdCliente'],$result['Nombre'],$result['Apellido'],$result['Direccion'],$result['Localidad'],$result['Telefono'],$result['Email']);
         include 'vistaClientes.php';
       }
}

?>
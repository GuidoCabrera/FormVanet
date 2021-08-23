<?php

include_once 'database.php';
include_once 'Client.php';

if(isset($_REQUEST['tuArrJson'])){
$param = json_decode($_REQUEST['tuArrJson']);
$param2 = implode(",",$param);

// printf($param2);

$db = new Database();
$query = $db->connect();
$stmt = $query->prepare("DELETE FROM clientes WHERE IdCliente IN($param2)");
$stmt->execute();

echo "<script type='text/javascript'>
        window.location.reload();
      </script>";
}

?>
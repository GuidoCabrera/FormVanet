<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet"> -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://localhost/PHP/formVanet/css/styles.css">
    <link rel="stylesheet" href="http://localhost/PHP/formVanet/css/EstiloTabla.css">
    <title>Tabla Vanet</title>
</head>
<body>

<?php 
      include_once 'searchClient.php';
      include_once 'pagination.php';
      if(!isset($_POST['search'])||empty($_POST['search'])){
      $pagination = new Pagination(15); }  ?>

<div id="containerDataTable">

<p id="respa"></p>

   <div id="headerTools">

   <div id="tools">
       <ul>
      <li>
      <button id="buttonTrash">
      <i class="icon-trash"></i>
      </button>
      </li>
      </ul>
   </div>

   <div id="search">
    <div id="inputGroup">
    <form action="tablaclientes.php" method="POST" id="formSearch">
    <i class="icon-search"></i><input type="text" name="search" placeholder="Buscar..." id="searchInput">
    </form>
     </div>
   </div>
   
   </div>

  <table id="dataTable">
  <thead>
        <tr>
            <th></th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Domicilio</th>
            <th>Localidad</th>
            <th>Telefono</th>
            <th>Email</th>
        </tr>
    </thead>
     <?php 
     if(empty($_POST['search'])){
        $pagination->mostrarClient(); 
     }
     else if(isset($_POST['search'])){
        mostrarBuscados();        
     }
     else{
     $pagination->mostrarClient(); 
    }
     ?>
  </table>

  <div id="footerTools">

     <div id="pages">
      <?php 
      if(!isset($_POST['search'])||empty($_POST['search'])){
         $pagination->mostrarPag();  }?>
     
  </div>

</div>

<script src="js/jquery-3.6.0.min.js"></script>
 <script src="js/table.js"></script>
</body>
</html>
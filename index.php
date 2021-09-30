<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanet</title>
    <?php include_once 'config.php' ?>
    <link rel="stylesheet" href="<?php echo constant('URL')?>css/styles.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>css/estiloVanet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Roboto+Condensed&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
    <div id="containerMenu">

           <a href="http://www.vanet.com.ar/" target="_blank" class="img" style="background-image:url(img/Vanet-Logo-Vector-01.png);"></a>

    <div id="containerEnlac">
           <a href="http://www.vanet.com.ar/" target="_blank"><i class="icon-paper-plane-o"></i> www.vanet.com.ar</a>
           <a href="https://wa.me/541139008706/" target="_blank"><i class="icon-whatsapp"></i> 1139008706</a>
    </div>

    </div>

    <div id="box">
        Unicamente complete este formulario en caso de querer modificar algun dato ya establecido
    </div>

    <div id="container">
        
    <form action="insertClient" method="post" id="formVanet">

       <div id="inputGroup">
       <div class="input-box">
            <span class="details">Nombre</span>
            <input type="text" name="name" autocomplete="off" placeholder="Ingrese su nombre" required>
            <p class="invisible" id="txt-name">Solo se permiten 3 a 20 caracteres(no numericos)</p>
          </div>
          <div class="input-box">
            <span class="details">Apellido</span>
            <input type="text" name="surname" autocomplete="off" placeholder="Ingrese su apellido" required>
            <p class="invisible" id="txt-surname">Solo se permiten 3 a 20 caracteres(no numericos)</p>
          </div>
          <div class="input-box">
            <span class="details" id="detailsDirection">Direccion y numeracion</span>
            <input type="text" name="direction" autocomplete="off" placeholder="Ingrese su direccion" required>
            <p class="invisible" id="txt-direction">No se ha ingresado una dirección y numeracion</p>
          </div>
          <div class="input-box">
            <span class="details">Localidad</span>
            <input type="text" name="location" autocomplete="off" placeholder="Ingrese su localidad" required>
            <p class="invisible" id="txt-location">Se permiten de 5 a 25 caracteres</p>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" autocomplete="off" placeholder="Ingrese su email" required>
            <p class="invisible" id="txt-email">No es considerado un email</p>
          </div>
          <div class="input-box">
            <span class="details">Telefono</span>
            <input type="text" name="phone" autocomplete="off" placeholder="Ingrese un numero de celular" required>
            <p class="invisible" id="txt-phone">Solo se permiten de 10 a 18 caracteres numericos</p>
          </div>

    </div>

    <div id="boxBtn">
        <button type="button" id="btnVanet">
           Enviar
        </button>
        <p id="txtVanet"></p>
    </div> 

    </form>
    </div>

  <script src="<?php echo constant('URL')?>js/jquery-3.6.0.min.js"></script>
  <script src="<?php echo constant('URL')?>js/restricForm.js"></script>
</body>
</html>
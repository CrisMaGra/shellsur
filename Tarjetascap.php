<?php
session_start();

$varsesion = $_SESSION['username'];

if($varsesion == null || $varsesion = ''){
    
    header("location:Index.php");
    die();
}

?>


<html>
    <head>
       <title>SHELL SUR - TARJETAS DE ENTRENAMIENTO</title>
       <link rel="stylesheet" type="text/css" href="StyleUser.css">  
    </head>
    <body>
        <div>
            <header class="HeaderSalir">
                <a class="Volver" href="javascript:history.back()">VOLVER</a>
                <?php  echo $_SESSION['username']; ?>
                <a class="Salir" href="Cerrar.php">SALIR</a>
            </header>
        </div>
        <div class="Logotipo">
            <header class="HeaderLogo">
                <img src="Img/Logo.png" class="Logo">
            </header>
        </div>
        <div>
            <header class="H1">
                <h1>TARJETAS DE ENTRENAMIENTO</h1>
            </header>
            <header class="HeaderPdf">
                <iframe src="Pdfs/Tarjetascap.pdf"></iframe>
            </header>
        </div>
    </body>
</html>
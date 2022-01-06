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
       <title>SHELL SUR - PROTOCOLO COVID19 SHELL SUR</title>
       <link rel="stylesheet" type="text/css" href="StyleUser.css">  
    </head>
    <body bgcolor="#4a4a4a">
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
            <h1>PROTOCOLO DE ATENCION COVID19 SHELL SUR</h1>
        </header>
            <header class="HeaderPdf">
                <iframe src="Pdfs/ProtCovid19.pdf"></iframe>
            </header>
        </div>
    </body>
</html>
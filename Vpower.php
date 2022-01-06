<?php
session_start();

$varsesion = $_SESSION['username'];

if($varsesion == null || $varsesion = ''){
    
    header("location:Index.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SALA DE EXPERTOS - V-POWER</title>
        <link rel="stylesheet" type="text/css" href="StyleUser.css">  
    </head>
    <body>
        <header class="BarraSalir">
            <a class="Volver" href="javascript:history.back()">VOLVER</a>
            <?php  echo $_SESSION['username']; ?>
            <a class="Salir" href="Cerrar.php">SALIR</a>
        </header>
        <div class="Logotipo">
            <img src="Img/Nuevologo.jpg" class="Logo">
        </div>
        <div class="Titulo">
            <h1>V-POWER</h1>
        </div>
        <section class="Pdf">
            <iframe src="Pdfs/ShellVpower.pdf"></iframe>
        </section>
        <footer class="Pie">
            <p>Todos los derechos reservados <a class="linkCG" href="https://www.linkedin.com/in/cristian-matias-granata/" target="_blank">Cristian Granata &reg; 2021 - <a class="Principal" href="javascript:history.back()">CAPACITACIONES</a> - V-POWER</p>
        </footer>
    </body>
</html>
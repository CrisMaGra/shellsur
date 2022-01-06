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
        <title>SHELL SUR</title>
        <link rel="stylesheet" type="text/css" href="StyleUser.css">
        <script type = "text/JavaScript">
            function AutoRefresh( t ) {
            setTimeout("location.reload(true);", t);
            }   
        </script>>  
    </head>
    <body onload = "JavaScript:AutoRefresh(200000);">
        <header class="Plantilla">
            <nav>
                <ul>
                    <li><a href="#"><img src="Img/iconMenu.png"></a>
                        <ul>
                            <li><a href="MantenP.php">MANTENIMIENTO PLAYA</a></li>
                            <br><br>
                            <li><a href="ProtViadelsur.php">PROTOCOLO VIA DEL SUR</a></li>
                            <br><br>
                            <li><a href="ProtTraslado.php">PROTOCOLO DE TRASLADO</a></li>
                            <br><br>
                            <li><a href="PolLimpieza.php">POLITICA DE LIMPIEZA</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="BarraSalir">
                <?php  echo $_SESSION['username']; ?>
                <a class="Salir" href="Cerrar.php">SALIR</a>
            </div> 
        </header>     
        <div class="Logotipo">
            <img src="Img/Nuevologo.jpg" class="Logo">
        </div>
        <div class="Titulo">
            <h1>CAPACITACIONES</h1>
        </div>
        <section class="Menu">
            <div>
                <a href="Covid19.php"><img src="Img/Covid19.png"></a>
            </div> 
            <br>
            <div>
                <a href="Aceites2.php"><img src="Img/Porfoliolub.png"></a>
                <a href="Aceites.php"><img src="Img/Aceitescaratula.png"></a>
            </div>
            <br>
            <div>
                <a href="Descarga.php"><img src="Img/Descarga.png"></a>
                <a href="Experiencia.php"><img src="Img/Experienciacliente.png"></a>
            </div>
            <br>
            <div>
                <a href="Medioambiente.php"><img src="Img/Mambiente.png"></a>
                <a href="Posiciontanques.php"><img src="Img/Tanques.png"></a>
            </div>
            <br>
            <div>
                <a href="Superacion.php"><img src="Img/Suppersonal.png"></a>
                <a href="Tecnicas.php"><img src="Img/Tecnicas.png"></a>
            </div>
            <br>
            <div>
                <a href="Vpower.php"><img src="Img/Vpower.png"></a>
                <a href="AhorroEnergia.php"><img src="Img/AhorrodeEnergia.png"></a>
            </div>
            <br>
            <div>
                <a href="Compostera.php"><img src="Img/Compostera.png"></a>
                <a href="Heimlich.php"><img src="Img/Heimlich.png"></a>
            </div>
            <br>
            <div>
                <a href="Roles.php"><img src="Img/Roles.png"></a>
                <a href="Shellflota.php"><img src="Img/Shellflota.png"></a>
            </div>
            <br>  
            <div>
                <a href="Plano.php"><img src="Img/Plano.png"></a>
                <a href="Dengue.php"><img src="Img/Dengue.png"></a>
            </div>
        </section>
        <footer class="Pie">
            <p>Todos los derechos reservados <a class="linkCG" href="https://www.linkedin.com/in/cristian-matias-granata/" target="_blank">Cristian Granata</a> &reg; 2021.</p>
        </footer>
    </body>
</html>
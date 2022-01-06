<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Style.css">
        <title>SALA DE EXPERTOS</title>

        <script type = "text/JavaScript">

            function AutoRefresh( t ) {
                setTimeout("location.reload(true);", t);
            }
             
        </script>   
    </head>
    <body onload = "JavaScript:AutoRefresh(200000);">
        <section class="FrmIndex">            
            <form method="post" action="Cn.php">

                <input type="text" name="usuario" placeholder="Usuario" required autofocus>

                <input type="password" name="clave" placeholder="&#128272; Contraseña" required>

                <input type="submit" name="submit" value="Ingreso">
            </form>
        </section>
    </body>
</html>

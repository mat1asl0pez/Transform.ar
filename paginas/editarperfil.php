<?php
require("../php/conexion.php");

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/inicio.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Trans.formar: Editar tu perfil</title>
</head>

<body>
    <!--NAV BAR-->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="../paginas/inicio.php"><img src="../img/logo.jpg" width="40" height="40" class="imagen"></a>
        <!--MI CUENTA-->
        <div class="botones">
            <a button class="btn" href="../paginas/foro.php">Foro</a></button>
            <a button class="btn" href="../paginas/perfil.php">Mi cuenta</a></button>
            <a button class="btn" href="../php/logout.php">Cerrar sesión</a></button>
        </div>
    </nav>
<br>
    <div class="container-fluid">
        <div class="row">
        <div class="col-2">
            </div>
            <div class="col-md-5 sm-2">
                <form action="../php/subirfotos.php" method="post" enctype="multipart/form-data">
                <h2>Cargar foto de perfil</h2>
                    <input type="file" class="btn" name="fileToUpload" id="fileToUpload"><br><br>
                    <input type="submit" class="btn" value="Cargar" name="submit">
                </form>
             <br>
            <h2>Acerca de ti</h2>
                <form action="../php/edicion.php" method="post">
                    <textarea required class="form-control" rows="2" cols="60" style="resize: none" name="descripcion" placeholder="Hasta 140 caracteres."></textarea><br>
                    <input type="submit" class="btn" value="Cargar" name="submit">   
                </form>
            </div>
        </div>
    </div>
    <br><br>

    <div class="footer">
        <p>Creado por ML para ComunidadIT. 2019.</p>
    </div>
</body>

</html>
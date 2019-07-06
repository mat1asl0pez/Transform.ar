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
    <title>Trans.formar: Inicio</title>
</head>

<body>
    <!--NAV BAR-->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="../paginas/inicio.php"><img src="../img/logo.jpg" width="40" height="40" class="imagen"></a>
        <!--MI CUENTA-->
        <div class="botones">
            <a button class="btn" href="../paginas/foro.php">Foro</a></button>
            <a button class="btn" href="../php/logout.php">Cerrar sesión</a></button>
        </div>
    </nav>

    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-5">
                <p>foto de perfil</p>
                <p>UsuarioID</p>
                <p>Forma parte de ... desde ..DATETIME</p>
                <div class="card text">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, pariatur officiis aperiam quidem incidunt amet, ipsa facere cupiditate ut sed blanditiis? Iste rerum ab dolor molestias dolorem reprehenderit odit aut.
                </p>
                </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card text">
                <div class="card-body">
                    <p>cantidad de posts idpublicaciones id usuario</p>
                </div>
                </div><br>
                <div class="card text">
                <div class="card-body">
                    <p>links otras redes</p>
                </div>
                </div><br>
                <a button class="btn" href="../paginas/editarperfil.php">Editar perfil</a></button>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>















    <div class="footer">
        <p>Creado por ML para ComunidadIT. 2019.</p>
    </div>

    <!--script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="">
    </script>
</body>

</html>
<?php
require("../php/conexion.php");

session_start();
$query = "select Destino from imagenes where usuarioid = " . $_SESSION["usuarioId"];
$resultados = mysqli_query($conexion, $query);
$fila = mysqli_fetch_array($resultados);

$queryusername = "select * from usuarios where usuarioid = " . $_SESSION["usuarioId"];
$resul = mysqli_query($conexion, $queryusername);
$columna = mysqli_fetch_array($resul);

$querydescripcion = "select * from edicion where usuarioid = " . $_SESSION["usuarioId"];
$resull = mysqli_query($conexion, $querydescripcion);
$linea = mysqli_fetch_array($resull);

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
                <div class="nombreuser">
                    <img class="fotoperfil" src ="<?php echo $fila["Destino"];?>">
                    <?php echo $columna["Username"];?>
                </div>
                <br>
                <p>Forma parte desde <?php echo $columna["Fecha"];?></p>
                <div class="card text">
                <div class="card-body">
                    <p ><?php echo $linea["Descripcion"];?></p>
                </div>
                </div>
                <br>
                <a button class="btn" href="../paginas/editarperfil.php">Editar perfil</a></button>
            </div>
            <div class="col-4">
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
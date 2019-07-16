<?php
require("../php/conexion.php");

session_start();


$queryusername = "select * from usuarios where usuarioid = " . $_SESSION["usuarioId"];
$resul = mysqli_query($conexion, $queryusername);
$columna = mysqli_fetch_array($resul);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/foro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Trans.formar: Foro</title>
</head>

<body>
    <!--NAV BAR-->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="../paginas/inicio.php"><img src="../img/logo.jpg" width="40" height="40" class="imagen"></a>
        <!--MI CUENTA-->
        <div class="botones">
            <a button class="btn" href="../paginas/perfil.php">Mi cuenta</a></button>
            <a button class="btn" href="../php/logout.php">Cerrar sesión </a></button>
        </div>
    </nav>

    <!--FIJADOS-->
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
            </div>

            <div class="col-8">
                <div class="card-body">
                    <div class="card text">
                        <div class="card-body">
                            <div class="row">
                                <div class="acciones col-1">
                                    <div class="pin"><i class="fas fa-thumbtack"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h4 class="card-title">FAQ/Reglas</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quos maiores consequatur voluptatum, molestiae, repellat sed officiis fugiat blanditiis modi libero dolores nulla tempora esse exercitationem nisi, distinctio et inventore.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-header">Posteado por (admin) el <?php echo $columna["Fecha"]; ?>
                    </div>
                </div>


                <div class="card-body">
                    <div class="card text">
                        <div class="card-body">
                            <div class="row">
                                <div class="acciones col-1">
                                    <div class="pin"><i class="fas fa-thumbtack"></i></div>
                                </div>

                                <div class="col-8">
                                    <h4 class="card-title">Avisos importantes</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quos maiores consequatur voluptatum, molestiae, repellat sed officiis fugiat blanditiis modi libero dolores nulla tempora esse exercitationem nisi, distinctio et inventore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">Posteado por (admin) el <?php echo $columna["Fecha"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <hr>
    <!--Comunidad-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">

                <div class="card-body">
                    <div class="card text">
                        <div class="card-body">
                            <div class="row">
                                <div class="acciones col-1">
                                    <div class="votopositivo"><i class="fas fa-thumbs-up"></i></div>
                                    <div class="comentar"><i class="fas fa-comment"></i></div>
                                </div>

                                <div class="col-8">
                                    <h4 class="card-title">Titulo</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quos maiores consequatur voluptatum, molestiae, repellat sed officiis fugiat blanditiis modi libero dolores nulla tempora esse exercitationem nisi, distinctio et inventore.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card-header">Posteado por <?php echo $columna["Username"]; ?> el <?php echo $columna["Fecha"]; ?>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card text">
                        <div class="card-body">
                            <div class="row">
                                <div class="acciones col-1">
                                    <div class="votopositivo"><i class="fas fa-thumbs-up"></i></div>
                                    <div class="comentar" id="comentar"><i class="fas fa-comment"></i></div>
                                </div>

                                <div class="col-8">
                                    <h4 class="card-title">Titulo</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quos maiores consequatur voluptatum, molestiae, repellat sed officiis fugiat blanditiis modi libero dolores nulla tempora esse exercitationem nisi, distinctio et inventore.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">Posteado por <?php echo $columna["Username"]; ?> el <?php echo $columna["Fecha"]; ?>
                    </div>
                </div>


                <?php 

                $query = "SELECT * from Publicaciones";

                $posteo = mysqli_query($conexion, $query);
               
                
                while($posteoforo = mysqli_fetch_array($posteo)) {
                    ?>

                <div class="card text">
                    <div class="card-body container-fluid">
                        <div class="row">
                            <div class="acciones col-1">
                                <div class="votopositivo"><i class="fas fa-thumbs-up"></i></div>
                                <div class="comentar" id="comentar"><i class="fas fa-comment"></i></div>

                            </div>

                            <div class="col-6">
                                <h4 class="card-title"><?php echo $posteoforo["Titulo"] ?>
                                </h4>
                                <p class="card-text"><?php echo $posteoforo["Mensaje"] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">Posteado por <?php echo $columna["Username"] ?> hace <?php echo $posteoforo["Fecha"] ?></div>
                </div>
                <?php
            }
            ?>

            </div>

            <div class="col-2"></div>
        </div>
    </div>

    </div>



    <br>
    <!--CREAR POST-->
    <div class="container fluid">
        <div class="row">
            <div class="card text col-12">
                <div class="card-body">
                    <h3>Crear post</h3>
                    <form action="../php/crearpost.php" method="post">
                        <div class="post">
                            <input type="text" required class="form-control" placeholder="Titulo" name="titulopost" id="post-title">
                        </div>
                        <br>
                        <div class="post">
                            <textarea required class="form-control" rows="7" cols="50" style="resize: none" name="contenidopost" placeholder="Texto" id="post-message"></textarea>
                        </div>
                        <br>
                        <button type="button" class="btn btn-success" name="botonpostear" id="post-button">Postear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

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
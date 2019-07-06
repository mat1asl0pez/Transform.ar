<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Trans.formar: Home</title>
</head>

<body>
    <!--NAV BAR-->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"><img src="../img/logo.jpg" width="40" height="40" alt="" class="imagen"></a>
    </nav>
    <br>


    <div class="split left">
        <div class="bienvenida">

            <h2>Bienvenidx</h2>
            <p>Trans-formar es un espacio donde podes encontrar información legal y actualidad de las personas
                transgénero en
                Argentina.</p>
            <h3>Foros</h3>
            <h3>Guias</h3>
            <h3>Temas</h3>
        </div>
    </div>


    <div class="split right">
        <div class="registro">
       
        <p class="subtitulo">Para participar en nuestro foro y visitar la guia, necesitas unirte.</p>
        <!--Registro-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moodal">
            Unirse
        </button><br><br>
        <!--Iniciar sesión-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
            Iniciar sesión
        </button>
         </div>
    </div>

    <!-- Ventanas emergente (modal)-->
    <div class="modal fade" id="moodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="titulomodal">Registrarse</h5>
                </div>
                <div class="modal-body">
                    <form action="../php/registros.php">
                        <input type="text" placeholder="Username" name="username" id="username" class="form-control" required><br>
                        <input type="email" placeholder="Email" id="email" name="email" class="form-control" required><br>
                        <input type="password" name="password" id="password" placeholder="Contraseña" class="form-control" required>
                        <div class="modal-footer">
                            <button type="submit" class="btn" id="boton-registrar"><span>Registrarse</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
                </div>

                <div class="modal-body">
                    <form action="../php/login.php">
                        <input type="text" placeholder="Username" name="username" id="usernamelog" class="form-control"><br>
                        <input type="password" id="passwordlog" placeholder="Contraseña" name="password" class="form-control">

                        <div class="modal-footer">
                            <button type="submit" class="btn" id="boton-loguear"><span>Iniciar
                                    sesión</span>
                                </button>
                        </div>
                    </form>
                </div>
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
    <script src="../js/home.js">
    </script>
</body>

</html>
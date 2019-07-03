<?php
// Obtengo el archivo con la conexion (la ruta es relativa)
require("../php/conexion.php");

// Mantengo la sesion abierta
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
      <a button class="btn" href="../paginas/perfil.php">Mi cuenta</a></button>
      <a button class="btn" href="../php/logout.php">Cerrar sesión </a></button>
    </div>
  </nav>


  <br> <br>
  <div class="iniciotexto">
    <div class="container-fluid">
      <div class="row">
        <div class="texto col-12">
          <h2>Haz click en los botones para empezar a navegar</h2>
        </div>
      </div>
      <br>
      <div class="container-fluid">
        <div class="row">
          <div class="botonesinicio col-6">
            <br>
            <a class="button1" href="../paginas/guia.php">Guia</a>
            <br>
            <h4 class="info">Info disponible en la página por les usuarixs y para les usuarixs</h4>
          </div>

          <div class="botonesinicio col-6">
            <br>
            <a class="button2" href="../paginas/foro.php">Foro</a>
            <br>
            <h4 class="info">Compartí y compará info con usuarixs de Trans.formar</h4>
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
    <script src="">
    </script>
</body>

</html>
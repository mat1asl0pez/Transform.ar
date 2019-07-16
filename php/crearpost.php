<?php
    // Obtenemos el archivo con la conexion a la base de datos
    require("conexion.php");

    // Mantengo la sesion abierta
    session_start();


    if(isset( $_POST['botonpostear'])){
        $titulo = $_POST['titulopost'];
        $texto = $_POST['contenidopost'];
        $query = "INSERT INTO publicaciones(titulo, texto, fecha, usuarioId) 
        VALUES('" . $titulo. "', '" . $texto . "', now(), '" . $_SESSION["user-id"] . "');"; 
    
    }
    /**  
     * Creo una query para insertar en la tabla publicaciones un nuevo
     * registro con los valores de las variables $titulo y $texto
     * Ademas, usamos la funcion de MySQL now() para guardar en el campo fecha
     * el tiempo exacto en que se creo la publicacion
     * Tambien utilizamos los valores guardados en la session de user-id y comunidad-id
     */ 
    
    
    // Ejecuto la query
    $posteo = mysqli_query($conexion, $query);
    if ($posteo){
        // Redirijo a 
    header('Location: ../paginas/foro.php');
    }

    else{
        var_dump(mysqli_error($conexion));
    }




?>
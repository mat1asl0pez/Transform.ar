<?php
    // Obtengo el archivo con la conexion a la base de datos
    require("../php/conexion.php");

    // Mantengo la sesion abierta
    session_start();

    /** 
     *  Obtengo el valor del campo con name user y password, que
     *  vienen guardadas en la variable global $_REQUEST, y las asigno
     *  a las variables $username y $password
     */
    $descripcion = $_REQUEST["descripcion"];
    $username = $_SESSION["usuarioId"];
    
    /**  
     * Creo una query para insertar en la tabla usuarios un nuevo
     * registro con los valores de las variables $username y $password
     */ 
    //$query = "INSERT INTO edicion(descripcion, usuarioId) 
    //VALUES('" . $descripcion . "', '" . $username . "')"; 

    // $sobreescribir = "IF EXISTS(SELECT * from Edicion where usuarioId = ". $username. ") 
    // Update Edicion Set Descripcion = '" . $descripcion . "' where usuarioId = ". $username ."
    // else
    // INSERT INTO edicion (descripcion, usuarioId) 
    // VALUES('" . $descripcion . "', '" . $username . "')"
    // ;

    
    $sobreescribir = "REPLACE INTO edicion (descripcion, usuarioId) 
    VALUES('" . $descripcion . "', '" . $username . "')";
    // Ejecuto la query y guardo el resultado en la variable $resultado
    $resultado = mysqli_query($conexion, $sobreescribir);


    if ($resultado) {
        /**
         * Si el resultado esta bien, guardamos en nombre de usuario en sesion,
         * tambien guardamos el id del usuario recien creado en sesion.
         * Por las dudas de que haya habido una sesion previa, borramos con unset
         * los datos guardados en la sesion de la comunidad seleccionada previamente
         * Y luego redirigimos a home
         */
        header('Location: ../paginas/perfil.php');
    } 
?>
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
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $email = $_REQUEST["email"];

    // Encripto la contraseña (no la guardamos tal cual esta, sino que la encriptamos impedir que pueda verse cual es)
    $hash = password_hash($password, PASSWORD_BCRYPT);
    
    /**  
     * Creo una query para insertar en la tabla usuarios un nuevo
     * registro con los valores de las variables $username y $password
     */ 
    $query = "INSERT INTO usuarios(username, password, email, fecha) 
    VALUES('" . $username . "', '" . $hash . "' , '" . $email . "', now())"; 

    // Ejecuto la query y guardo el resultado en la variable $resultado
    $resultado = mysqli_query($conexion, $query);


    if ($resultado) {
        /**
         * Si el resultado esta bien, guardamos en nombre de usuario en sesion,
         * tambien guardamos el id del usuario recien creado en sesion.
         * Por las dudas de que haya habido una sesion previa, borramos con unset
         * los datos guardados en la sesion de la comunidad seleccionada previamente
         * Y luego redirigimos a home
         */
        $_SESSION["username"] = $username;
        $_SESSION["usuarioId"] = mysqli_insert_id($conexion);

        /*unset($_SESSION["comunidad-id"]);
        unset($_SESSION["comunidad-nombre"]);*/

        header('Location: ../paginas/editarperfil.php');
    } else {
        /**
         * Si el resultado esta mal, es muy probable que el usuario que se este
         * intentando crear ya existe. Como en la tabla el campo esta definido como UNIQUE,
         * no puede haber dos iguales, por lo tanto si pasa eso nos va a tirar un error
         * En ese caso lo que hacemos es guardar en session un mensaje informando tal cosa
         * y redirijo a login
         */
        $_SESSION["message"] = "Usuario ya existente";
        header('Location: ../paginas/home.php');        
    }

?>
<?php
session_start();
if(isset ($_SESSION["username"])){
    header('Location: paginas/inicio.php');
} else{
    header('Location: paginas/home.php');
}
?>
<?php
session_start();

require("../php/conexion.php");
$target_dir = "../img/";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_dir . basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION));
$target_file = $target_dir . $_SESSION["username"] . "." . $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $query="insert into imagenes(nombre, destino, usuarioid) values ('perfil','". $target_file ."','". $_SESSION["usuarioId"] ."')";
        mysqli_query($conexion, $query);
        echo mysqli_error($conexion);
        header('Location: ../paginas/perfil.php');

    } 
    else {
        echo "Sorry, there was an error uploading your file.";
        header('Location: ../paginas/perfil.php');
    }
    
}

?>
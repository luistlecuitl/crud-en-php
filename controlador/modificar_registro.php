<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["comentario"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){

        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $comentario=$_POST["comentario"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql = $conexion->query(" UPDATE id_persona SET nombre='$nombre', apellido='$apellido', comentario='$comentario', fecha_nac='$fecha', correo='$correo' WHERE id_persona=$id ");

        if ($sql==1) {
            header("location:index.php");
        }else {
            echo '<div class="alert alert-danger">Hubo un error al modificar algún o varios registros</div>';            
        }

    }else{
        echo '<div class="alert alert-warning">Ingresa todos los campos</div>';        
    }
}
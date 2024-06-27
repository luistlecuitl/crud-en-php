<?php

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["comentario"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $comentario=$_POST["comentario"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql = $conexion->query("INSERT INTO id_persona(nombre, apellido, comentario, fecha_nac, correo) VALUES('$nombre','$apellido', '$comentario', '$fecha', '$correo') ");

        if ($sql==1) {
            echo '<div class="alert alert-success">Todos los campos han sido registrados</div>';
        }else {
            echo '<div class="alert alert-warning">Falta por ingresar un campo</div>';
        }
    } else {
            echo '<div class="alert alert-danger">Ingresa todos los campos</div>';        
    }    

}
?>
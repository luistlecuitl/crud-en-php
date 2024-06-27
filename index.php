<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6a0ca8ec9d.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function eliminar () {

            var respuesta=confirm("Estar seguro de eliminar el registro");
            return respuesta;

        }
    </script>
    <h1 class="text-center p-2">CRUD PHP</h1>
    <?php

    include "modelo/conexion.php";
    include "controlador/eliminar_persona.php";

    ?>
    <div class="container-fluid row">
        <form  class="col-4 p-3" method="POST">
                <h3 class="text-center text-secondary">Registro de personas</h3>
                <?php
                //include "modelo/conexion.php";
                include "controlador/registro_persona.php";            
                ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre(s) de la persona</label>
                    <input type="text" class="form-control" name="nombre">                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido(s)</label>
                    <input type="text" class="form-control" name="apellido">                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Comentarios</label>
                    <input type="text" class="form-control" name="comentario">                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha">                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="
                    " class="form-control" name="correo">                    
                </div>
                                   
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="table-dark">
                    
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE(S)</th>
                        <th scope="col">APELLIDO(S)</th>
                        <th scope="col">COMENTARIOS</th>
                        <th scope="col">FECHA NACIMIENTO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "modelo/conexion.php";
                        $sql = $conexion->query(" SELECT * FROM id_persona ");
                        while ($datos = $sql->fetch_object()){ ?>
                             <tr>
                                <!-- <th scope="row">1</th> -->
                                    <td><?= $datos->id_persona ?></td>
                                    <td><?= $datos->nombre ?></td>
                                    <td><?= $datos->apellido ?></td>
                                    <td><?= $datos->comentario ?></td>
                                    <td><?= $datos->fecha_nac ?></td>
                                    <td><?= $datos->correo ?></td>
                                    <td>
                                        <a href="modificar_producto.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i> </a>
                                    </td>
                            </tr>
                      <?php  }                 
                        ?> 
                </tbody>
            </table>
        </div>            
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
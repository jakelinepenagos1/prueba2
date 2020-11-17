<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>


    <?php 
        //Consultar datos
        //1. Incluir el archivo BaseDatos
        include("baseDatos.php");

        //2. Crear una copia o objeto de la BaseDatos
        $operacionBD=new BaseDatos();

        //3. Crear una consulta para BUSCAR en SQL
        $consultaSQL="SELECT * FROM producto WHERE 1";

        //4. Almacenar la respuesta de la consula (ejecutando la consulta)
        $producto=$operacionBD->consultarDatos($consultaSQL);

        
    ?>

    <div class="container">
    
        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($producto as $producto):?>

                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($producto["nombreProducto"])?></h5>
                            <h6>tiempo que ha estado en conservacion</h6>
                            <p class="card-text"><?php echo($producto["tiempo"])?></p>
                            <h6>cantidad que se enuentra en venta </h6>
                            <p class="card-text"><?php echo($producto["cantidad"])?></p>
                            <a href="eliminarProducto.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-danger">eliminar</a>
                        </div>
                    </div>
                </div>


            <?php endforeach?>

        </div>
    
    
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>
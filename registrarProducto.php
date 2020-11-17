

<?php   


include("BaseDatos.php");

if(isset($_POST["boton"])){

    //1. Recibir los datos
    $nombreProducto=$_POST["nombreProducto"];
    $marca=$_POST["marcaProducto"];
    $tiempo=$_POST["tiempoProducto"];
    $precio=$_POST["precioProducto"];
    $cantidad=$_POST["cantidadProducto"];
   
    
    $operacionBD =new BaseDatos();

    $consultaSQL=" INSERT INTO producto(nombreProducto,marca,tiempo,precio,cantidad) VALUES ('$nombreProducto','$marca','$tiempo','$precio','$cantidad')";
    
   $producto=$operacionBD->agregarDatos($consultaSQL);

}

?>
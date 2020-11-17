
<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){

    //1. Recibir los datos
    $descripcion=$_POST["descripcion"];
    $nombre=$_POST["nombreUsuario"];
    $apellido=$_POST["apellidoUsuario"];
    $cedula=$_POST["cedulaUsuario"];
    

    
    //2. crear un objeto(copia) de la clase BaseDatos()
    $operacionBD= new BaseDatos();
   

    //3.Necesito crear una consulta SQL para insertar datos
    $consultaSQL="INSERT INTO usuarios(nombre,apellido,cedula,descripcion) VALUES ('$nombre','$apellido','$cedula','$descripcion')";

    //4. LLamar al metodo agregarDatos() de la clase BaseDatos
    $usuario=$operacionBD->agregarDatos($consultaSQL);


}
?>
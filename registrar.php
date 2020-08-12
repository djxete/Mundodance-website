<?php

include ("conexion.php"); //llama al archivo de conexion.php

//Recibir los datos y almacenarlos en variables

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

// Consultar para insertar

$insertar = "INSERT INTO usuario(nombre, apellidos, correo, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$telefono')";

// Ejecutar la consulta(ejecuta la variable $insertar y lo envía a la variable $conexión)

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    echo "<script>alert('No se pudo regitrar'); window.history.go(-1);</script>";
}
else{
    echo "<script>alert('Se ha registrado correctamente');
    window.location='/pagina mundodance'</script>";

    //window.location='/' // si estás en un host lo dejas así

}

//Cerrar conexión
mysqli_close($conexion);


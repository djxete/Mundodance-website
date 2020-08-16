<?php

error_reporting(E_ALL ^ E_NOTICE);

if(isset($_POST['submit'])) { 


    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $terminos = $_POST["terminos"];
   


    if(empty($nombre)|| is_numeric($nombre) || strlen($nombre) > 20 ) {
        echo "<p class='error'> Introduza un nombre </p>";
    // } else {
    //     if(strlen($nombre) > 15) {
    //         echo "<p class='error'> El nombre es muy largo </p>";
    //     }
    
     } if(empty($apellidos) || is_numeric($apellidos) || strlen($apellidos) > 30 ) {
        echo "<p class='error'> Introduza tus apellidos </p>";
    // } else {
    //     if(strlen($apellidos) > 30) {
    //         echo "<p class='error'> Los apellidos son muy largos </p>";
    //     }
    
    } if(empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<p class='error'> Introduza tu correo </p>";
    // } else {
    //     if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    //         echo "<p class='error'> El correo debe ser válido </p>";
    //     }
    
    }if(empty($telefono) || !is_numeric($telefono) || strlen($telefono) > 15) {
        echo "<p class='error'> Introduza un teléfono válido </p>";
    // } else {
    //     if(!is_numeric($telefono)) {
    //         echo "<p class='error'> La edad tiene que ser un número </p>";
    //     }
    // }
   
    }if(!(isset($terminos) && $terminos == '1')) {

        echo "<p class='error'> Debes aceptar las condiciones </p>";

} 

else {

        $conexion = mysqli_connect("localhost", "root", "*Rn637502164", "contacta_mundodance");


        //Recuperar variables del formulario
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        
        
        
        //Guardar datos en sql
        
        $insertar = "INSERT INTO usuario(nombre, apellidos, correo, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$telefono')";
        
        
        
        //Ejecutar la sentencia
        
        $ejecutar = mysqli_query($conexion, $insertar);
        
        
        
        if(!$conexion){
            echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
        }
        else{
        
           // sleep(6);
            echo "<script>alert('Se ha registrado correctamente');
            window.location='/pagina mundodance'</script>";
        
            //window.location='/' // si estás en un host lo dejas así
        
        }
        
        //Cerrar conexión
        mysqli_close($conexion);



        //include ("conexion.php");
    }



   
  
}

?>
<?php


//include ("validarformulario.php");

//include ("conexion.php"); //llama al archivo de conexion.php

//Recibir los datos y almacenarlos en variables

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];



// Consultar para insertar

$insertar = "INSERT INTO usuario(nombre, apellidos, correo, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$telefono')";


// Ejecutar la consulta(ejecuta la variable $insertar y lo envía a la variable $conexión)

$resultado = mysqli_query($conexion, $insertar);











// //Validación formulario

// if(isset($_POST['submit'])) { 

//     $nombre = $_POST["nombre"];
//     $apellidos = $_POST["apellidos"];
//     $correo = $_POST["correo"];
//     $telefono = $_POST["telefono"];

//     if(empty($nombre)) {
//         echo "<p class='error'> Introduza un nombre </p>";
//     } else {
//         if(strlen($nombre) > 15) {
//             echo "<p class='error'> El nombre es muy largo </p>";
//         }
//     }

//     if(empty($apellidos)) {
//         echo "<p class='error'> Introduza tus apellidos </p>";
//     } else {
//         if(strlen($apellidos) > 30) {
//             echo "<p class='error'> Los apellidos son muy largos </p>";
//         }
//     }

//     if(empty($correo)) {
//         echo "<p class='error'> Introduza tu correo </p>";
//     } else {
//         if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
//             echo "<p class='error'> El correo debe ser válido </p>";
//         }
//     }

//     if(empty($telefono)) {
//         echo "<p class='error'> Introduza un teléfono válido </p>";
//     } else {
//         if(!is_numeric($telefono)) {
//             echo "<p class='error'> La edad tiene que ser un número </p>";
//         }
//     }

// } 





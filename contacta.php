

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Normalize css -->
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />

    <!-- Css Propio -->
    <link rel="stylesheet" href="css/main.css">

 
    <title>MundoDance</title>

   

</head>

<body>

 <!-- PHP  -->

 <?php

if(isset($_POST['submit'])){


$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$terminos = $_POST["terminos"];


}

?> 


 <!-- HEADER  -->

    <div class="header-parallaxQ">

        <header class="headerQ">

            <div class="header__grid-icono">
                <i class="fas fa-play icono__i"></i>
            </div>
            <div class="header__grid-logoQ">
                <p class="logo__pQ"><span class="logo__p-spanQ">adictos</span> al <span
                        class="logo__p-span-spanQ">musicón</span></p>
            </div>
            <nav class="header__grid-navigationQ">
                <i class="navigation__iQ fas fa-bars"></i>
            </nav>
            <nav class="header__navQ">
                <ul class="header__nav__ulQ">
                    <li class="header__nav__ul-liQ"><a href="index.html" target="e_blank"
                            class="header__nav__ul-aQ">inicio</a></li>
                    <li class="header__nav__ul-liQ"><a href="quienessomos.html" target="e_blank"
                            class="header__nav__ul-aQ">quienes somos</a></li>
                    <li class="header__nav__ul-liQ"><a href="sesiones.html" target="e_blank"
                            class="header__nav__ul-aQ">sesiones</a></li>
                    <li class="header__nav__ul-liQ"><a href="contacta.php" target="e_blank"
                            class="header__nav__ul-aQ">contacta</a></li>

                </ul>
            </nav>
            <div class="enlaces-header">
                <a href="index.html">Inicio</a>
                <a href="quienessomos.html">quienes somos</a>
                <a href="sesiones.html">sesiones</a>
                <a href="contacta.php">contacta</a>
            </div>

        </header>


    </div> <!-- header-parallax-->



     <!-- FORMULARIO  -->


    <section class="section">
        <h3 class="h3 container">contáctanos</h3>
    </section>


    <main class="contacta">

    <!-- action="registrar.php" -->
        <form  id="myForm" action="validarformulario.php" class="form container" 
        method="POST">

            <!--Campo nombre-->
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="form__label">Nombre:</label>
                <div class="formulario__grupo-input">
                    <input type="text" placeholder="Campo obligatorio" class="form__input" id="form__label-name" name="nombre" value="<?php if(isset($nombre)) echo $nombre ?>">
                    <i class="fas fa-times-circle formulario__validacion-estado"></i>
                </div>
                <p class="formulario__input-error">El nombre solo puede contener letras,espacios en blanco y como mínimo 4 caracteres</p>
            </div>
            
            <!--Campo apellidos-->
            <div class="formulario__grupo"  id="grupo__apellidos">
                <label for="apellidos" class="form__label">Apellidos:</label>
                <div class="formulario__grupo-input">
                    <input type="text" placeholder="Campo obligatorio" class="form__input" id="form__label-surname"
                        name="apellidos" value="<?php if(isset($apellidos)) echo $apellidos ?>">
                    <i class="fas fa-times-circle formulario__validacion-estado"></i>
                </div>
                <p class="formulario__input-error">Los apellidos solo pueden contener letras y espacios en blanco</p>
            </div>
            
            
            <!--Campo email-->
            <div class="formulario__grupo" id="grupo__correo">
                <label for="correo" class="form__label">Email:</label>
                <div class="formulario__grupo-input">
                    <input type="text" placeholder="Campo obligatorio" class="form__input" id="form__label-email"
                        name="correo" value="<?php if(isset($correo)) echo $correo ?>">
                    <i class="fas fa-times-circle formulario__validacion-estado"></i>
                </div>
                <p class="formulario__input-error">El email solo puede contener letras,números,puntos,guiones y guiones
                    bajos</p>
            </div>
            
            
            <!--Campo teléfono-->
            <div class="formulario__grupo" id="grupo__telefono">
                <label for="telefono" class="form__label">Teléfono móvil:</label>
                <div class="formulario__grupo-input">
                    <input type="tel" placeholder="Campo obligatorio" class="form__input" id="form__label-telefono"
                        name="telefono" value="<?php if(isset($telefono)) echo $telefono ?>">
                    <i class="fas fa-times-circle formulario__validacion-estado"></i>
                </div>
                <p class="formulario__input-error">El teléfono solo puede contener números y como máximo 9 números</p>
            </div>
            
            <!--Campo tipo de sesión-->
            <div class="formulario__grupo" id="grupo__sesion">
                <label for="sesión" class="form__label">Tipo de sesión</label>
                <select class="form__select">
                    <option value="Remember" class="form__select-option">Remember</option>
                    <option value="Actual" class="form__select-option">Actual</option>
                    <option value="Bumping" class="form__select-option">Bumping</option>
                 </select>
            </div>
            <!--Campo términos y condiciones-->
            <!-- <div class="formulario__grupo" id="grupo__terminos">
                <label class="formulario__label">
                    <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos" value="1">
                    <p class="formulario__checkbox-p">Acepto los términos y condiciones</p>
                </label>
            </div> -->
            
            <!--Mensaje error-->
            <!-- <div class="formulario__mensaje" id="formulario__mensaje">
                <p class="formulario__mensaje-p"><i class="fas fa-exclamation-triangle"></i><b> Error:</b> Por favor rellene el formulario
                    correctamente </p>
            
            </div>
             -->
            
            <!--Botón-->
            <button type="submit" class="form__btn" name="submit">Enviar</button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">El formulario se ha enviado correctamente</p>
            <!--Mensaje enviado correctamente-->

            
            </form>
            

    </main>


     <!-- FOOTER  -->



    <footer class="footer">

        <div class="header__grid-icono">
            <i class="fas fa-play icono__i"></i>
        </div>

        <div class="footer__div">
            <p class="footer__div-p"><span class="footer__div-span">adictos</span> al <span
                    class="footer__div-span-span">musicón</span></p>
        </div>

        <div class="footer__div">
            <ul class="footer__ul">
                <li><a href="https://www.facebook.com/ignacio.herraezgonzalez"  target="_blank"><i class="fab fa-facebook footer__ul-i"></i></a>
                </li>
                <li><a href="https://www.instagram.com/nachonaxgonzalez/"  target="_blank"><i class="fab fa-instagram footer__ul-i"></i></a>
                </li>
                <li><a href="https://www.youtube.com/channel/UC7kFpWm9tGV1QglSSwBnoNQ"  target="_blank"><i class="fab fa-youtube footer__ul-i"></i></a></li>
            </ul>
        </div>

    </footer>


<!-- Javascript -->
    <script src="js/main.js"></script>
    

</body>

</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/tablet.css" media="screen and (min-width: 768px)"> 
    <link rel="stylesheet" href="../css/largeScreen.css" media="screen and (min-width: 960px)">
    <link rel="stylesheet" href="../css/xlargeScreen.css" media="screen and (min-width: 1030px)">
</head>
<body>
    <section id="contenedor-cabecera">
        
        <article id="logo">
                <a href="empresasVista.php"><img src="../../assets/iconos/SENA-logo.svg" alt=""></a>
        </article>

        <?php if (isset($_SESSION['Admin']) || isset($_SESSION['Extensionista'])) { ?>
            <article id="icono-menu-contenedor">
                <img id="icono-menu" src="../../assets/iconos/menu_black_24dp.svg" alt="">
            </article>
            
        <?php }else { ?>
            <article id="icono-usuario-contenedor">
            <a href="login.php"><img id="icono-usuario" src="../../assets//iconos/icono_usuario_24dp.svg" alt=""></a> 
                
            </article>
        <?php } ?>
            
      
        <article id="menu">
                <ul>
                   <?php if (isset($_SESSION['Admin'])) { ?>
                        <a href="usuariosVista.php"><li>Usuarios</li></a>
                    <?php } ?>
                    <a href="../html/empresasVista.php"><li>Diagnósticos</li></a>
                    <a id="cambio-pass" href="cambioContrasenaVista.php"><li>Cambio contraseña</li></a>
                    <li id="descargar">Descargar PDF</li>
                    <a href="../../controlador/cerrarSesionControlador.php"><li>Cerra sesión</li></a>
                    <li id="cerrar-menu">X</li>
                </ul>
            </article>

            <?php if (isset($_SESSION['Admin']) || isset($_SESSION['Extensionista'])) { ?>
            <article id="menu-vista-escritorio">
                <ul>
                        <?php if (isset($_SESSION['Admin'])) { ?>
                            <a href="usuariosVista.php"><li>Usuarios</li></a>
                        <?php } ?>
                        
                    <a id="descargar2" href="#"><li>Decargar PDF</li></a> 
                    <a href="../html/empresasVista.php"><li>Diagnósticos</li></a>
                    <a href="../html/cambioContrasenaVista.php">Cambio contraseña</a>
                    <a href="../../controlador/cerrarSesionControlador.php"><li>Cerrar sesión</li></a>
                </ul>
            </article>
            <?php } ?>
        
    </section>
        
</body>
<script src="../js/header.js"></script>
</html>
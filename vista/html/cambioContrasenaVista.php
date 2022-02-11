<?php
session_start();
if (!isset($_SESSION['Admin']) && !isset($_SESSION['Extensionista']) ) {
    header('Location: inicio.php');
   
} ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/iconos/SENA-logo.svg">
    <title>Piloto Diagnostico Sena</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>
<body id="body-login">
    <header>
        <?php include_once 'header.php'; ?>
    </header>
    <main id="main-cambiarContrasena">
        <section id="login-contenedor">
            <h2>Cambiar contraseña</h2>
            <form id="login-form" action="../../controlador/cambiarPassControlador.php" method="POST">
                <label for="cedula">Cédula</label>
                <input type="number" name="cedula" required autofocus>
                <label for="pass">Contraseña actual</label>
                <input type="password" name="contrasenaActual" required>
                <label for="pass">Nueva contraseña</label>
                <input type="password" name="contrasenaNueva" required>
                <label for="pass">Repita la nueva contraseña</label>
                <input type="password" name="confirmacionContrasena" required>
                <article id="submit-login">
                    <input id="submit-button" type="submit" value="Cambiar">
                </article>
                
            </form>
        </section>
    </main>
    <footer>
    <?php include_once 'footer.php'; ?>
    </footer>
  
</body>
</html>
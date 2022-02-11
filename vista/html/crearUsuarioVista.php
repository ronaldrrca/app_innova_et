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
</head>
<body>
    <header>
        <?php include_once 'header.php'; ?>
    </header>
    <main id="main-crearUsuario">
   
        <section id="login-contenedor">
            <h2>Nuevo usuario</h2>
            <form id="usuario-form" action="../../controlador/crearUsuarioControlador.php" method="POST">
                <label for="cedula">Cédula</label>
                <input type="number" name="cedula" required>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required>
                <label for="perfil">Perfil</label>
                <select name="perfil" id="" required>
                    <option value="" selected disabled>Elija una opción</option>
                    <option value="Admin">Admin</option>
                    <option value="Extensionista">Extensionista</option>
                </select>
                <article id="submit-agregar-usuario">
                    <input id="agregar-usuario" type="submit" value="Agregar">
                </article>
                
            </form>
            
        </section>
    </main>
    <footer>
    <?php include_once 'footer.php'; ?>
    </footer>
  
</body>
</html>
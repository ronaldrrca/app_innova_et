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
            <h2>Editar usuario</h2>
            <form id="usuario-form" action="../../controlador/editarUsuarioControlador.php" method="POST">
                <label for="id">Id</label>
                <input type="text" name="id" readonly value=" <?php echo $_GET['id'] ?> ">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value=" <?php echo $_GET['nombre'] ?> " >
                <label for="perfil">Perfil</label>
                <select name="perfil" id="" required>
                    <option value="<?php echo $_GET['perfil'] ?>" selected > <?php echo $_GET['perfil'] ?> </option>
                    <option value="Admin">Admin</option>
                    <option value="Extensionista">Extensionista</option>
                </select>
                <article id="submit-editar-usuario">
                    <input id="editar-usuario" type="submit" value="Editar">
                    
                </article>
                
            </form>
                <article id="contenedor-cancelarEditarUsuario">
                <a href="<?=$_SERVER['HTTP_REFERER']?>"><button id="cancelar-editarUsuario">Cancelar</button></a> 
                </article>
            
        </section>
    </main>
    <footer>
    <?php include_once 'footer.php'; ?>
    </footer>
  
</body>
</html>
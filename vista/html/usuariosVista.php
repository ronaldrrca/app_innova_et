<?php require_once('../../controlador/listarUsuariosControlador.php');  
        session_start(); 

        if (!isset($_SESSION['Admin'])) {
                header('Location: inicio.php');
        }
?> 

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
            <?php include_once 'header.php' ?>
    </header>
    <main id="main-usuarios">
            <section id="usuarios-contenedor">
                    
                    <h2>Usuarios</h2> 
                                     
                    <article id="contenedor-tablas">
                              <table id="tabla-usuarios">
                                      <tr>
                                                <!-- <th style="width:4%;">Id</th> -->
                                                <!-- <th>Cédula</th> -->
                                                <th style="width:40%;">Nombre</th>
                                                <th style="width:12%;">Perfil</th>
                                                <th style="width:8%;">Editar</th>
                                                <th style="width:8%;">Reset</th>
                                                <th style="width:8%;">Eliminar</th>
                                        </tr>
                                        <?php while ($resultados = $listar->fetch_object()) { ?>
                                                <tr>
                                                        <!-- <td><?php echo $resultados->id_usuarios; ?></td> -->
                                                        <!-- <td><?php echo $resultados->usuarios_cedula; ?></td> -->
                                                        <td><?php echo $resultados->usuarios_nombre; ?></td>
                                                        <td><?php echo $resultados->usuarios_perfil; ?></td>
                                                        <td><img src="../../assets/iconos/icono-editar.svg" alt="" onclick="editarUsuario('editarUsuarioVista.php', '<?php echo $resultados->id_usuarios; ?>', 
                                                        '<?php echo $resultados->usuarios_nombre; ?>', '<?php echo $resultados->usuarios_perfil; ?>')"> </td>
                                                        <td><img src="../../assets/iconos/lock_reset_black_24dp.svg" alt="" onclick="resetContrasena('../../controlador/resetPassControlador.php',
                                                        '<?php echo $resultados->id_usuarios?>', '<?php echo $resultados->usuarios_cedula ?>', '<?php echo $resultados->usuarios_nombre; ?>')"></td>
                                                        <td><img src="../../assets/iconos/icono-eliminar.svg" alt="" onclick="eliminarUsuario('../../controlador/eliminarUsuarioControlador.php',
                                                        '<?php echo $resultados->id_usuarios?>', '<?php echo $resultados->usuarios_perfil ?>', '<?php echo $resultados->usuarios_nombre; ?>')"> </td>
                                                                </tr>
                                                        <?php } ?>        
                              </table>  
                    </article>
                    <a id="nuevo-usuario" href="crearUsuarioVista.php"><button>Nuevo</button></a>
                    
            </section>
    </main>
    <footer>
            <?php include_once 'footer.php'; ?>
    </footer>
</body>
<script src="../js/usuarios.js"></script>
</html>
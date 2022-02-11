<?php
require_once '../modelo/usuarios.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$perfil = $_POST['perfil'];


$objUsuarios = new Usuarios;

$editar = $objUsuarios->editarUsuario($id, $nombre, $perfil);

if ($editar) {
    echo '<script> alert ("Operación exitosa, presione aceptar para continuar"); </script>';
                  echo "<meta http-equiv='refresh' content='0;../vista/html/usuariosVista.php' />";
}else {
    echo '<script> alert ("Ocurrió un error"); </script>';
                  echo "<meta http-equiv='refresh' content='0;../vista/html/cambioContrasenaVista.php' />";
}
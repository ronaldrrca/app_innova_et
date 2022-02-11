<?php
require_once '../modelo/usuarios.php';

$id = $_GET['id'];
$perfil = $_GET['perfil'];


if ($perfil != "Admin") {
    $objUsuarios = new Usuarios;

            $eliminar = $objUsuarios->eliminarUsuario($id);

            if ($eliminar) {
                echo '<script> alert ("Operación exitosa, presione aceptar para continuar"); </script>';
                            echo "<meta http-equiv='refresh' content='0;../vista/html/usuariosVista.php' />";
            }else {
                echo '<script> alert ("Ocurrió un error"); </script>';
                            echo "<meta http-equiv='refresh' content='0;../vista/html/usuariosVista.php.php' />";
            }

}else {
    echo '<script> alert ("No es posible eliminar un usuario administrador"); </script>';
    echo "<meta http-equiv='refresh' content='0;../vista/html/usuariosVista.php' />";
}




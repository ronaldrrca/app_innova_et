<?php
//Se requiere el archivo que contiene la clase Empleados
require_once('../modelo/usuarios.php');


//Se reciben los valores que provienen del formulario
$cedula = trim($_POST['cedula']);
$nombre = trim(strtoupper($_POST['nombre']) );
$perfil = trim($_POST['perfil']) ;
$hash=password_hash($cedula, PASSWORD_BCRYPT);

// echo $hash;
// die();

//Se instancia la clase usuarios
$objUsuario=new Usuarios;

//Se invoca la función crear usuario
$crear=$objUsuario->crearUsuario($cedula, $nombre, $perfil, $hash);

  //Consicional para redireccionar de acuerdo al resultado
  if ($crear) {
    header('location:../vista/html/usuariosVista.php');
  }else {
    header('location:../vista/html/usuariosVista.php');
  }

 ?>



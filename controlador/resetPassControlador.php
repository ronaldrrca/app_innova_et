<?php
// Iniciar una nueva sesión o reanudar la existente
session_start();
//Se requiere el archivo que contiene la clase Usuarios
require_once('../modelo/usuarios.php');

//Se reciben los valores que provienen del formulario
$id=$_GET['id'];
$cedula=$_GET['cedula'];
$hash=password_hash($cedula, PASSWORD_BCRYPT);



//Se instancia la clase usuarios
$objUsuario=new Usuarios;

//Se invoca la función para validar cédula y contraseña
$reset=$objUsuario->resetContrasena($id, $hash);


  //Consicional para redireccionar de acuerdo al resultado
  if ($reset) {

        echo '<script> alert ("La contraseña del usuario seleccionado es ahora su número de cédula"); </script>';
        echo "<meta http-equiv='refresh' content='0;../vista/html/usuariosVista.php' />";
                 
  }else {
      //Se muestra un alert de javascript, se espera que el usuario presione aceptar
         echo '<script> alert ("Ocurrió un error"); </script>';
         echo "<meta http-equiv='refresh' content='0;../vista/html/usuariosVista.php' />";
          }
?>
<?php
// Iniciar una nueva sesión o reanudar la existente
session_start();
//Se requiere el archivo que contiene la clase Usuarios
require_once('../modelo/usuarios.php');

//Se reciben los valores que provienen del formulario
$cedula=$_POST['cedula'];
$contrasenaActual=$_POST['contrasenaActual'];
$contrasenaNueva=$_POST['contrasenaNueva'];
$confirmacionContrasena=$_POST['confirmacionContrasena'];
$hash=password_hash($contrasenaNueva, PASSWORD_BCRYPT);

//Se instancia la clase usuarios
$objUsuario=new Usuarios;

//Se invoca la función para validar cédula y contraseña
$validar=$objUsuario->validarUsuario($cedula);

//Se recibe el resultado en un array
$resultado=$validar->fetch_assoc();
// echo $cedula . " " . $contrasenaActual . " " . $contrasenaNueva . " " . $confirmacionContrasena . " " . $hash;


// echo "<pre>";
// print_r($resultado);
// echo "</pre>";
// die();

  //Consicional para redireccionar de acuerdo al resultado
  if ($resultado) {

        if (password_verify($contrasenaActual, $resultado['usuarios_contrasena'])) {
                if ($contrasenaNueva == $confirmacionContrasena) {
                      $cambiar=$objUsuario->cambiarContrasena($cedula, $hash); 

                        if ($cambiar) {
                          echo '<script> alert ("Cambio de contraseña exitoso, presione aceptar iniciar sesión con su nueva contraseña"); </script>';
                          echo "<meta http-equiv='refresh' content='0;cerrarSesionControlador.php' />";
                        }else {
                          echo '<script> alert ("Ocurrió un error, vuelva a intentar o contacte al administrador del sistema"); </script>';
                          echo "<meta http-equiv='refresh' content='0;../vista/html/cambioContrasenaVista.php' />";
                        }

                  
                  
                }else{
                  echo '<script> alert ("La contraseña nueva y su verificación deben ser iguales"); </script>';
                  echo "<meta http-equiv='refresh' content='0;../vista/html/cambioContrasenaVista.php' />";
                }    
          
                        
          }else {
            //Se muestra un alert de javascript, se espera que el usuario presione aceptar
                  echo '<script> alert ("Contraseña inválida. Presione aceptar para continuar"); </script>';
                  echo "<meta http-equiv='refresh' content='0;../vista/html/cambioContrasenaVista.php' />";
          }


  }else {
    //Se muestra un alert de javascript, se espera que el usuario presione aceptar
    echo "<script type='text/javascript'>alert('Cédula inválida o no registrada');</script>";
    echo "<meta http-equiv='refresh' content='0;../vista/html/cambioContrasenaVista.php' />";
  }



  


  
  
 ?>
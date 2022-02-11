<?php
// Iniciar una nueva sesión o reanudar la existente
session_start();
//Se requiere el archivo que contiene la clase Usuarios
require_once('../modelo/usuarios.php');

//Se reciben los valores que provienen del formulario
$cedula=$_POST['cedula'];
$contrasena=$_POST['contrasena'];


//Se instancia la clase usuarios
$objUsuario=new Usuarios;

//Se invoca la función para validar cédula y contraseña
$validar=$objUsuario->validarUsuario($cedula);

//Se recibe el resultado en un array
$resultado=$validar->fetch_assoc();

// echo "<pre>";
// print_r($resultado);
// echo "</pre>";
// die();

  //Consicional para redireccionar de acuerdo al resultado
  if ($resultado) {

        if (password_verify($contrasena, $resultado['usuarios_contrasena'])) {
              //Sí se inicia sesión, la variable $_SESION toma el valor de nit
              if ($resultado['usuarios_perfil']=="Admin") {
                  $_SESSION['Admin']=$resultado['id_usuarios'];
                  
              }else if($resultado['usuarios_perfil']=="Extensionista"){
                  $_SESSION['Extensionista']=$resultado['id_usuarios'];
                  
              }else {
                // code...
              }
              echo "<meta http-equiv='refresh' content='0;../vista/html/empresasVista.php' />";

          }else {
            //Se muestra un alert de javascript, se espera que el usuario presione aceptar
                  echo '<script> alert ("Contraseña inválida. Presione aceptar para continuar"); </script>';
                  echo "<meta http-equiv='refresh' content='0;../vista/html/login.php' />";
          }


  }else {
    //Se muestra un alert de javascript, se espera que el usuario presione aceptar
    echo "<script type='text/javascript'>alert('Cédula inválida o no registrada');</script>";
    echo "<meta http-equiv='refresh' content='0;../vista/html/login.php' />";
  }

  
  
 ?>
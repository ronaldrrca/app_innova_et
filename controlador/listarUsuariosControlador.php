<?php
//Se requiere el archivo que contiene la clase usuarios, con la ruta para llamarlo desde la vista
require_once('../../modelo/usuarios.php');

//Se instancia la clase usuarios
  $objUsuario=new Usuarios;

//Se invoca la función litarusuarios
$listar=$objUsuario->listarUsuarios();
// echo "<pre>";
// print_r($listar);
// echo "</pre>";
// die();

 ?>

<?php

//Se invoca el archivo que contiene la clase que permite la conexión a la BD
require_once('conexion.php');

//Clase Usuarios
class ResultadosDx1{
  private $idEmpresa;
//   private $nombreEmpresa;
  private $nit;
//   private $fechaDx;





 public function obtenerResultado($idEmpresa){
  $this -> idEmpresa = $idEmpresa;
  
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $consultar = $conexion->query("call resultadoDx1('$this->idEmpresa')");


    //Se retorna el resultado de la consulta
  return $consultar;
}//Fin función obtenerResultado


public function obtenerResultadoDx2($nit){
  $this -> nit = $nit;
  
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $consultar = $conexion->query("call resultadoDx2('$this->nit')");


    //Se retorna el resultado de la consulta
  return $consultar;
}//Fin función obtenerResultadoDx2




public function obtenerComparativa($nit){
  // $this -> idEmpresa = $id;
  $this -> nit = $nit;
  
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $consultar = $conexion->query("call compararDxs('$this->nit')");


    //Se retorna el resultado de la consulta
  return $consultar;
}//Fin función obtenerComparativa





}

 ?>

<?php

//Se invoca el archivo que contiene la clase que permite la conexión a la BD
require_once('conexion.php');

//Clase Usuarios
class Diagnostico2{
  private $id;
  private $idDXInicial;
  private $fechaDx;
  private $nombre;
  private $nit;
  private $sectorEconomomico;
  private $representante;
  private $email;
  private $telefono;
  private $paginaWeb;
  private $plataformaInno;
  private $camaraComercio;
  private $numeroTrabajadores;
  private $ventasMensuales;
  private $descripcion;
  private $intensidadIDI;

  private $tres_uno_uno; 
  private $tres_uno_dos; 
  private $tres_dos_uno; 
  private $tres_dos_dos; 
  private $tres_tres_uno; 
  private $tres_tres_dos; 
  private $tres_cuatro_uno; 
  private $tres_cuatro_dos; 
  private $tres_cinco_uno; 
  private $tres_cinco_dos; 
  private $tres_seis_uno; 
  private $tres_seis_dos; 

  private $cuatro_uno_uno; 
  private $cuatro_uno_dos; 
  private $cuatro_dos_uno; 
  private $cuatro_dos_dos; 
  private $cuatro_tres_uno; 
  private $cuatro_tres_dos; 
  private $cuatro_cuatro_uno; 
  private $cuatro_cuatro_dos; 
  private $cuatro_cinco_uno; 
  private $cuatro_cinco_dos; 
  private $cuatro_seis_uno; 
  private $cuatro_seis_dos; 

  private $cinco_uno_uno; 
  private $cinco_uno_dos; 
  private $cinco_dos_uno; 
  private $cinco_dos_dos; 
  private $cinco_tres_uno; 
  private $cinco_tres_dos; 
  private $cinco_cuatro_uno; 
  private $cinco_cuatro_dos; 
  private $cinco_cinco_uno; 
  private $cinco_cinco_dos; 

  private $seis_uno; 
  private $seis_dos; 
  private $seis_tres; 
  private $seis_cuatro; 
  private $seis_cinco; 
  private $seis_seis; 
  private $seis_siete; 
  private $seis_ocho; 

  private $siete_uno_uno;
  private $siete_uno_dos;
  private $siete_uno_tres;
  private $siete_dos_uno;
  private $siete_dos_dos;
  private $siete_dos_tres;
  private $siete_tres_uno;
  private $siete_tres_dos;
  private $siete_tres_tres;
  private $siete_cuatro_uno;
  private $siete_cuatro_dos;
  private $siete_cuatro_tres;
  private $siete_cinco_uno;
  private $siete_cinco_dos;
  private $siete_cinco_tres;

  private $ocho_uno;

  private $nueve_uno;

  private $diez_uno_uno;
  private $diez_uno_dos;
  private $diez_dos_uno;
  private $diez_dos_dos;
  private $diez_tres_uno;
  private $diez_tres_dos;
  private $diez_cuatro_uno;
  private $diez_cuatro_dos;
  private $diez_cinco_uno;
  private $diez_cinco_dos;
  private $diez_seis_uno;
  private $diez_seis_dos;
  private $diez_siete_uno;
  private $diez_siete_dos;
  private $diez_ocho_uno;
  private $diez_ocho_dos;
  private $diez_nueve_uno;
  private $diez_nueve_dos;

  private $once_uno;
  private $once_dos;
  private $once_tres;
  private $once_cuatro;
  private $once_cinco;

  private $doce_uno;
  private $doce_dos;
  private $doce_tres;
  private $doce_cuatro;
  private $doce_cinco;
  private $doce_seis;
  private $doce_siete;
  private $doce_ocho;
  private $doce_nueve;

  //Constructor
 public function crearDx1($idDXInicial,  $nombre, $nit, $sectorEconomico, $representante, $email,  $telefono, $paginaWeb, $plataformaInno,
                          $camaraComercio, $numeroTrabajadores, $ventasMensuales, $descripcion, $intensidadIDI, $tres_uno_uno, 
                          $tres_uno_dos, $tres_dos_uno, $tres_dos_dos, $tres_tres_uno, $tres_tres_dos, $tres_cuatro_uno,$tres_cuatro_dos, 
                          $tres_cinco_uno, $tres_cinco_dos, $tres_seis_uno, $tres_seis_dos, $cuatro_uno_uno, $cuatro_uno_dos, 
                          $cuatro_dos_uno, $cuatro_dos_dos, $cuatro_tres_uno, $cuatro_tres_dos, $cuatro_cuatro_uno, $cuatro_cuatro_dos, 
                          $cuatro_cinco_uno, $cuatro_cinco_dos, $cuatro_seis_uno, $cuatro_seis_dos, $cinco_uno_uno, $cinco_uno_dos, 
                          $cinco_dos_uno, $cinco_dos_dos, $cinco_tres_uno, $cinco_tres_dos, $cinco_cuatro_uno, $cinco_cuatro_dos,
                          $cinco_cinco_uno, $cinco_cinco_dos, $seis_uno, $seis_dos, $seis_tres, $seis_cuatro, $seis_cinco, $seis_seis,
                          $seis_siete, $seis_ocho, $siete_uno_uno, $siete_uno_dos, $siete_uno_tres, $siete_dos_uno, $siete_dos_dos, 
                          $siete_dos_tres, $siete_tres_uno, $siete_tres_dos, $siete_tres_tres, $siete_cuatro_uno, $siete_cuatro_dos, 
                          $siete_cuatro_tres, $siete_cinco_uno, $siete_cinco_dos, $siete_cinco_tres, $ocho_uno, $nueve_uno, $diez_uno_uno,
                          $diez_uno_dos, $diez_dos_uno, $diez_dos_dos, $diez_tres_uno, $diez_tres_dos, $diez_cuatro_uno, $diez_cuatro_dos,
                          $diez_cinco_uno, $diez_cinco_dos, $diez_seis_uno, $diez_seis_dos, $diez_siete_uno, $diez_siete_dos,
                          $diez_ocho_uno, $diez_ocho_dos, $diez_nueve_uno, $diez_nueve_dos, $once_uno, $once_dos, $once_tres,
                          $once_cuatro, $once_cinco, $doce_uno, $doce_dos, $doce_tres, $doce_cuatro, $doce_cinco, $doce_seis,
                          $doce_siete, $doce_ocho, $doce_nueve){

   $this -> idDXInicial = $idDXInicial;                           
   $this -> nombre = $nombre;
   $this -> nit = $nit;
   $this -> sectorEconomico = $sectorEconomico;
   $this -> representante = $representante;
   $this -> email = $email;
   $this -> telefono = $telefono;
   $this -> paginaWeb = $paginaWeb;
   $this -> plataformaInno = $plataformaInno;
   $this -> camaraComercio = $camaraComercio;
   $this -> numeroTrabajadores = $numeroTrabajadores;
   $this -> ventasMensuales = $ventasMensuales;
   $this -> descripcion = $descripcion;
   $this -> intensidadIDI = $intensidadIDI;
   $this -> tres_uno_uno = $tres_uno_uno; 
   $this -> tres_uno_dos = $tres_uno_dos; 
   $this -> tres_dos_uno = $tres_dos_uno; 
   $this -> tres_dos_dos = $tres_dos_dos; 
   $this -> tres_tres_uno = $tres_tres_uno; 
   $this -> tres_tres_dos = $tres_tres_dos; 
   $this -> tres_cuatro_uno = $tres_cuatro_uno; 
   $this -> tres_cuatro_dos = $tres_cuatro_dos; 
   $this -> tres_cinco_uno = $tres_cinco_uno; 
   $this -> tres_cinco_dos = $tres_cinco_dos; 
   $this -> tres_seis_uno = $tres_seis_uno; 
   $this -> tres_seis_dos = $tres_seis_dos; 
   $this -> cuatro_uno_uno = $cuatro_uno_uno; 
   $this -> cuatro_uno_dos = $cuatro_uno_dos; 
   $this -> cuatro_dos_uno = $cuatro_dos_uno; 
   $this -> cuatro_dos_dos = $cuatro_dos_dos; 
   $this -> cuatro_tres_uno = $cuatro_tres_uno; 
   $this -> cuatro_tres_dos = $cuatro_tres_dos; 
   $this -> cuatro_cuatro_uno = $cuatro_cuatro_uno; 
   $this -> cuatro_cuatro_dos = $cuatro_cuatro_dos;  
   $this -> cuatro_cinco_uno = $cuatro_cinco_uno; 
   $this -> cuatro_cinco_dos = $cuatro_cinco_dos; 
   $this -> cuatro_seis_uno = $cuatro_seis_uno; 
   $this -> cuatro_seis_dos = $cuatro_seis_dos;
   $this -> cinco_uno_uno = $cinco_uno_uno; 
   $this -> cinco_uno_dos = $cinco_uno_dos; 
   $this -> cinco_dos_uno = $cinco_dos_uno; 
   $this -> cinco_dos_dos = $cinco_dos_dos; 
   $this -> cinco_tres_uno = $cinco_tres_uno; 
   $this -> cinco_tres_dos = $cinco_tres_dos; 
   $this -> cinco_cuatro_uno = $cinco_cuatro_uno; 
   $this -> cinco_cuatro_dos = $cinco_cuatro_dos; 
   $this -> cinco_cinco_uno = $cinco_cinco_uno; 
   $this -> cinco_cinco_dos = $cinco_cinco_dos;
   $this -> seis_uno = $seis_uno; 
   $this -> seis_dos = $seis_dos; 
   $this -> seis_tres = $seis_tres; 
   $this -> seis_cuatro = $seis_cuatro; 
   $this -> seis_cinco = $seis_cinco; 
   $this -> seis_seis = $seis_seis; 
   $this -> seis_siete = $seis_siete; 
   $this -> seis_ocho = $seis_ocho;   
   $this -> siete_uno_uno = $siete_uno_uno;
   $this -> siete_uno_dos = $siete_uno_dos;
   $this -> siete_uno_tres = $siete_uno_tres;
   $this -> siete_dos_uno = $siete_dos_uno;
   $this -> siete_dos_dos = $siete_dos_dos;
   $this -> siete_dos_tres = $siete_dos_tres;
   $this -> siete_tres_uno = $siete_tres_uno;
   $this -> siete_tres_dos = $siete_tres_dos;
   $this -> siete_tres_tres = $siete_tres_tres;
   $this -> siete_cuatro_uno = $siete_cuatro_uno;
   $this -> siete_cuatro_dos = $siete_cuatro_dos;
   $this -> siete_cuatro_tres = $siete_cuatro_tres;
   $this -> siete_cinco_uno = $siete_cinco_uno;
   $this -> siete_cinco_dos = $siete_cinco_dos;
   $this -> siete_cinco_tres = $siete_cinco_tres;
   $this -> ocho_uno = $ocho_uno;
   $this -> nueve_uno = $nueve_uno;
   $this -> diez_uno_uno = $diez_uno_uno;
   $this -> diez_uno_dos = $diez_uno_dos;
   $this -> diez_dos_uno = $diez_dos_uno;
   $this -> diez_dos_dos = $diez_dos_dos;
   $this -> diez_tres_uno = $diez_tres_uno;
   $this -> diez_tres_dos = $diez_tres_dos;
   $this -> diez_cuatro_uno = $diez_cuatro_uno;
   $this -> diez_cuatro_dos = $diez_cuatro_dos;
   $this -> diez_cinco_uno = $diez_cinco_uno;
   $this -> diez_cinco_dos = $diez_cinco_dos;
   $this -> diez_seis_uno = $diez_seis_uno;
   $this -> diez_seis_dos = $diez_seis_dos;
   $this -> diez_siete_uno = $diez_siete_uno;
   $this -> diez_siete_dos = $diez_siete_dos;
   $this -> diez_ocho_uno = $diez_ocho_uno;
   $this -> diez_ocho_dos = $diez_ocho_dos;
   $this -> diez_nueve_uno = $diez_nueve_uno;
   $this -> diez_nueve_dos = $diez_nueve_dos;
   $this -> once_uno = $once_uno;
   $this -> once_dos = $once_dos;
   $this -> once_tres = $once_tres;
   $this -> once_cuatro = $once_cuatro;
   $this -> once_cinco = $once_cinco;
   $this -> doce_uno = $doce_uno;
   $this -> doce_dos = $doce_dos;
   $this -> doce_tres = $doce_tres;
   $this -> doce_cuatro = $doce_cuatro;
   $this -> doce_cinco = $doce_cinco;
   $this -> doce_seis = $doce_seis;
   $this -> doce_siete = $doce_siete;
   $this -> doce_ocho = $doce_ocho;
   $this -> doce_nueve = $doce_nueve;



   //Se instancia la clase Conexion
   $objConexion = new Conexion();

   //Se invoca la función conectarse() de la clase Conexion
   $conexion = $objConexion -> conectarse();

      $create = $conexion->query("call crearDx1('$this->idDxInicial', '$this->nombre', '$this->nit', '$this->sectorEconomico', '$this->representante',
        '$this->email', '$this->telefono', '$this->paginaWeb', '$this->plataformaInno', '$this->camaraComercio',
        '$this->numeroTrabajadores', '$this->ventasMensuales', '$this->descripcion', '$this->intensidadIDI', '$this->tres_uno_uno',
        '$this->tres_uno_dos', '$this->tres_dos_uno', '$this->tres_dos_dos', '$this->tres_tres_uno', '$this->tres_tres_dos', 
        '$this->tres_cuatro_uno', '$this->tres_cuatro_dos', '$this->tres_cinco_uno', '$this->tres_cinco_dos', '$this->tres_seis_uno', 
        '$this->tres_seis_dos', '$this->cuatro_uno_uno', '$this->cuatro_uno_dos', '$this->cuatro_dos_uno', '$this->cuatro_dos_dos', 
        '$this->cuatro_tres_uno', '$this->cuatro_tres_dos', '$this->cuatro_cuatro_uno', '$this->cuatro_cuatro_dos', 
        '$this->cuatro_cinco_uno', '$this->cuatro_cinco_dos', '$this->cuatro_seis_uno', '$this->cuatro_seis_dos',
        '$this->cinco_uno_uno', '$this->cinco_uno_dos', '$this->cinco_dos_uno', '$this->cinco_dos_dos', '$this->cinco_tres_uno', 
        '$this->cinco_tres_dos', '$this->cinco_cuatro_uno', '$this->cinco_cuatro_dos', '$this->cinco_cinco_uno', '$this->cinco_cinco_dos',
        '$this->seis_uno', '$this->seis_dos', '$this->seis_tres', '$this->seis_cuatro', '$this->seis_cinco', '$this->seis_seis', 
        '$this->seis_siete', '$this->seis_ocho', '$this->siete_uno_uno', '$this->siete_uno_dos', '$this->siete_uno_tres', 
        '$this->siete_dos_uno', '$this->siete_dos_dos', '$this->siete_dos_tres', '$this->siete_tres_uno', '$this->siete_tres_dos',
        '$this->siete_tres_tres','$this->siete_cuatro_uno','$this->siete_cuatro_dos','$this->siete_cuatro_tres',    
        '$this->siete_cinco_uno','$this->siete_cinco_dos','$this->siete_cinco_tres', '$this->ocho_uno', '$this->nueve_uno', 
        '$this->diez_uno_uno', '$this->diez_uno_dos', '$this->diez_dos_uno', '$this->diez_dos_dos', '$this->diez_tres_uno', 
        '$this->diez_tres_dos', '$this->diez_cuatro_uno', '$this->diez_cuatro_dos', '$this->diez_cinco_uno', '$this->diez_cinco_dos',
        '$this->diez_seis_uno', '$this->diez_seis_dos', '$this->diez_siete_uno', '$this->diez_siete_dos', '$this->diez_ocho_uno', 
        '$this->diez_ocho_dos', '$this->diez_nueve_uno', '$this->diez_nueve_dos', '$this->once_uno', '$this->once_dos', '$this->once_tres', 
        '$this->once_cuatro', '$this->once_cinco', '$this->doce_uno', '$this->doce_dos', '$this->doce_tres', '$this->doce_cuatro',
         '$this->doce_cinco', '$this->doce_seis', '$this->doce_siete', '$this->doce_ocho', '$this->doce_nueve')");


     //Se retorna el resultado de la consulta
   return $create;
 }//Fin función Dx1

 //________________________________________________________________________________________________________________________________

 public function crearDx2($nombre, $nit, $sectorEconomico, $representante, $email,  $telefono, $paginaWeb, $plataformaInno,
 $camaraComercio, $numeroTrabajadores, $ventasMensuales, $descripcion, $intensidadIDI, $tres_uno_uno, 
 $tres_uno_dos, $tres_dos_uno, $tres_dos_dos, $tres_tres_uno, $tres_tres_dos, $tres_cuatro_uno,$tres_cuatro_dos, 
 $tres_cinco_uno, $tres_cinco_dos, $tres_seis_uno, $tres_seis_dos, $cuatro_uno_uno, $cuatro_uno_dos, 
 $cuatro_dos_uno, $cuatro_dos_dos, $cuatro_tres_uno, $cuatro_tres_dos, $cuatro_cuatro_uno, $cuatro_cuatro_dos, 
 $cuatro_cinco_uno, $cuatro_cinco_dos, $cuatro_seis_uno, $cuatro_seis_dos, $cinco_uno_uno, $cinco_uno_dos, 
 $cinco_dos_uno, $cinco_dos_dos, $cinco_tres_uno, $cinco_tres_dos, $cinco_cuatro_uno, $cinco_cuatro_dos,
 $cinco_cinco_uno, $cinco_cinco_dos, $seis_uno, $seis_dos, $seis_tres, $seis_cuatro, $seis_cinco, $seis_seis,
 $seis_siete, $seis_ocho, $siete_uno_uno, $siete_uno_dos, $siete_uno_tres, $siete_dos_uno, $siete_dos_dos, 
 $siete_dos_tres, $siete_tres_uno, $siete_tres_dos, $siete_tres_tres, $siete_cuatro_uno, $siete_cuatro_dos, 
 $siete_cuatro_tres, $siete_cinco_uno, $siete_cinco_dos, $siete_cinco_tres, $ocho_uno, $nueve_uno, $diez_uno_uno,
 $diez_uno_dos, $diez_dos_uno, $diez_dos_dos, $diez_tres_uno, $diez_tres_dos, $diez_cuatro_uno, $diez_cuatro_dos,
 $diez_cinco_uno, $diez_cinco_dos, $diez_seis_uno, $diez_seis_dos, $diez_siete_uno, $diez_siete_dos,
 $diez_ocho_uno, $diez_ocho_dos, $diez_nueve_uno, $diez_nueve_dos, $once_uno, $once_dos, $once_tres,
 $once_cuatro, $once_cinco, $doce_uno, $doce_dos, $doce_tres, $doce_cuatro, $doce_cinco, $doce_seis,
 $doce_siete, $doce_ocho, $doce_nueve){

$this -> nombre = $nombre;
$this -> nit = $nit;
$this -> sectorEconomico = $sectorEconomico;
$this -> representante = $representante;
$this -> email = $email;
$this -> telefono = $telefono;
$this -> paginaWeb = $paginaWeb;
$this -> plataformaInno = $plataformaInno;
$this -> camaraComercio = $camaraComercio;
$this -> numeroTrabajadores = $numeroTrabajadores;
$this -> ventasMensuales = $ventasMensuales;
$this -> descripcion = $descripcion;
$this -> intensidadIDI = $intensidadIDI;
$this -> tres_uno_uno = $tres_uno_uno; 
$this -> tres_uno_dos = $tres_uno_dos; 
$this -> tres_dos_uno = $tres_dos_uno; 
$this -> tres_dos_dos = $tres_dos_dos; 
$this -> tres_tres_uno = $tres_tres_uno; 
$this -> tres_tres_dos = $tres_tres_dos; 
$this -> tres_cuatro_uno = $tres_cuatro_uno; 
$this -> tres_cuatro_dos = $tres_cuatro_dos; 
$this -> tres_cinco_uno = $tres_cinco_uno; 
$this -> tres_cinco_dos = $tres_cinco_dos; 
$this -> tres_seis_uno = $tres_seis_uno; 
$this -> tres_seis_dos = $tres_seis_dos; 
$this -> cuatro_uno_uno = $cuatro_uno_uno; 
$this -> cuatro_uno_dos = $cuatro_uno_dos; 
$this -> cuatro_dos_uno = $cuatro_dos_uno; 
$this -> cuatro_dos_dos = $cuatro_dos_dos; 
$this -> cuatro_tres_uno = $cuatro_tres_uno; 
$this -> cuatro_tres_dos = $cuatro_tres_dos; 
$this -> cuatro_cuatro_uno = $cuatro_cuatro_uno; 
$this -> cuatro_cuatro_dos = $cuatro_cuatro_dos;  
$this -> cuatro_cinco_uno = $cuatro_cinco_uno; 
$this -> cuatro_cinco_dos = $cuatro_cinco_dos; 
$this -> cuatro_seis_uno = $cuatro_seis_uno; 
$this -> cuatro_seis_dos = $cuatro_seis_dos;
$this -> cinco_uno_uno = $cinco_uno_uno; 
$this -> cinco_uno_dos = $cinco_uno_dos; 
$this -> cinco_dos_uno = $cinco_dos_uno; 
$this -> cinco_dos_dos = $cinco_dos_dos; 
$this -> cinco_tres_uno = $cinco_tres_uno; 
$this -> cinco_tres_dos = $cinco_tres_dos; 
$this -> cinco_cuatro_uno = $cinco_cuatro_uno; 
$this -> cinco_cuatro_dos = $cinco_cuatro_dos; 
$this -> cinco_cinco_uno = $cinco_cinco_uno; 
$this -> cinco_cinco_dos = $cinco_cinco_dos;
$this -> seis_uno = $seis_uno; 
$this -> seis_dos = $seis_dos; 
$this -> seis_tres = $seis_tres; 
$this -> seis_cuatro = $seis_cuatro; 
$this -> seis_cinco = $seis_cinco; 
$this -> seis_seis = $seis_seis; 
$this -> seis_siete = $seis_siete; 
$this -> seis_ocho = $seis_ocho;   
$this -> siete_uno_uno = $siete_uno_uno;
$this -> siete_uno_dos = $siete_uno_dos;
$this -> siete_uno_tres = $siete_uno_tres;
$this -> siete_dos_uno = $siete_dos_uno;
$this -> siete_dos_dos = $siete_dos_dos;
$this -> siete_dos_tres = $siete_dos_tres;
$this -> siete_tres_uno = $siete_tres_uno;
$this -> siete_tres_dos = $siete_tres_dos;
$this -> siete_tres_tres = $siete_tres_tres;
$this -> siete_cuatro_uno = $siete_cuatro_uno;
$this -> siete_cuatro_dos = $siete_cuatro_dos;
$this -> siete_cuatro_tres = $siete_cuatro_tres;
$this -> siete_cinco_uno = $siete_cinco_uno;
$this -> siete_cinco_dos = $siete_cinco_dos;
$this -> siete_cinco_tres = $siete_cinco_tres;
$this -> ocho_uno = $ocho_uno;
$this -> nueve_uno = $nueve_uno;
$this -> diez_uno_uno = $diez_uno_uno;
$this -> diez_uno_dos = $diez_uno_dos;
$this -> diez_dos_uno = $diez_dos_uno;
$this -> diez_dos_dos = $diez_dos_dos;
$this -> diez_tres_uno = $diez_tres_uno;
$this -> diez_tres_dos = $diez_tres_dos;
$this -> diez_cuatro_uno = $diez_cuatro_uno;
$this -> diez_cuatro_dos = $diez_cuatro_dos;
$this -> diez_cinco_uno = $diez_cinco_uno;
$this -> diez_cinco_dos = $diez_cinco_dos;
$this -> diez_seis_uno = $diez_seis_uno;
$this -> diez_seis_dos = $diez_seis_dos;
$this -> diez_siete_uno = $diez_siete_uno;
$this -> diez_siete_dos = $diez_siete_dos;
$this -> diez_ocho_uno = $diez_ocho_uno;
$this -> diez_ocho_dos = $diez_ocho_dos;
$this -> diez_nueve_uno = $diez_nueve_uno;
$this -> diez_nueve_dos = $diez_nueve_dos;
$this -> once_uno = $once_uno;
$this -> once_dos = $once_dos;
$this -> once_tres = $once_tres;
$this -> once_cuatro = $once_cuatro;
$this -> once_cinco = $once_cinco;
$this -> doce_uno = $doce_uno;
$this -> doce_dos = $doce_dos;
$this -> doce_tres = $doce_tres;
$this -> doce_cuatro = $doce_cuatro;
$this -> doce_cinco = $doce_cinco;
$this -> doce_seis = $doce_seis;
$this -> doce_siete = $doce_siete;
$this -> doce_ocho = $doce_ocho;
$this -> doce_nueve = $doce_nueve;



//Se instancia la clase Conexion
$objConexion = new Conexion();

//Se invoca la función conectarse() de la clase Conexion
$conexion = $objConexion -> conectarse();

$create = $conexion->query("call crearDx2('$this->nombre', '$this->nit', '$this->sectorEconomico', '$this->representante',
'$this->email', '$this->telefono', '$this->paginaWeb', '$this->plataformaInno', '$this->camaraComercio',
'$this->numeroTrabajadores', '$this->ventasMensuales', '$this->descripcion', '$this->intensidadIDI', '$this->tres_uno_uno',
'$this->tres_uno_dos', '$this->tres_dos_uno', '$this->tres_dos_dos', '$this->tres_tres_uno', '$this->tres_tres_dos', 
'$this->tres_cuatro_uno', '$this->tres_cuatro_dos', '$this->tres_cinco_uno', '$this->tres_cinco_dos', '$this->tres_seis_uno', 
'$this->tres_seis_dos', '$this->cuatro_uno_uno', '$this->cuatro_uno_dos', '$this->cuatro_dos_uno', '$this->cuatro_dos_dos', 
'$this->cuatro_tres_uno', '$this->cuatro_tres_dos', '$this->cuatro_cuatro_uno', '$this->cuatro_cuatro_dos', 
'$this->cuatro_cinco_uno', '$this->cuatro_cinco_dos', '$this->cuatro_seis_uno', '$this->cuatro_seis_dos',
'$this->cinco_uno_uno', '$this->cinco_uno_dos', '$this->cinco_dos_uno', '$this->cinco_dos_dos', '$this->cinco_tres_uno', 
'$this->cinco_tres_dos', '$this->cinco_cuatro_uno', '$this->cinco_cuatro_dos', '$this->cinco_cinco_uno', '$this->cinco_cinco_dos',
'$this->seis_uno', '$this->seis_dos', '$this->seis_tres', '$this->seis_cuatro', '$this->seis_cinco', '$this->seis_seis', 
'$this->seis_siete', '$this->seis_ocho', '$this->siete_uno_uno', '$this->siete_uno_dos', '$this->siete_uno_tres', 
'$this->siete_dos_uno', '$this->siete_dos_dos', '$this->siete_dos_tres', '$this->siete_tres_uno', '$this->siete_tres_dos',
'$this->siete_tres_tres','$this->siete_cuatro_uno','$this->siete_cuatro_dos','$this->siete_cuatro_tres',    
'$this->siete_cinco_uno','$this->siete_cinco_dos','$this->siete_cinco_tres', '$this->ocho_uno', '$this->nueve_uno', 
'$this->diez_uno_uno', '$this->diez_uno_dos', '$this->diez_dos_uno', '$this->diez_dos_dos', '$this->diez_tres_uno', 
'$this->diez_tres_dos', '$this->diez_cuatro_uno', '$this->diez_cuatro_dos', '$this->diez_cinco_uno', '$this->diez_cinco_dos',
'$this->diez_seis_uno', '$this->diez_seis_dos', '$this->diez_siete_uno', '$this->diez_siete_dos', '$this->diez_ocho_uno', 
'$this->diez_ocho_dos', '$this->diez_nueve_uno', '$this->diez_nueve_dos', '$this->once_uno', '$this->once_dos', '$this->once_tres', 
'$this->once_cuatro', '$this->once_cinco', '$this->doce_uno', '$this->doce_dos', '$this->doce_tres', '$this->doce_cuatro',
'$this->doce_cinco', '$this->doce_seis', '$this->doce_siete', '$this->doce_ocho', '$this->doce_nueve')");


//Se retorna el resultado de la consulta
return $create;
}//Fin función crerUsuario












//____________________________________________________________________________________________________________________________________
 


public function listarDx(){
    
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $listar = $conexion->query("call listarDx2");

   
    //Se retorna el resultado de la consulta
  return ($listar) ;
}//Fin función listarEmpresas



public function consultarNit($nit){
  $this->nit=$nit;
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $consultar = $conexion->query("call consultarNitDx2($this->nit)");


    //Se retorna el resultado de la consulta
  return $consultar;
}//Fin función consultarNit


public function verDocDxFinal($nit){
  $this->nit=$nit;
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $consultar = $conexion->query("call verDocDxFinal($this->nit)");


    //Se retorna el resultado de la consulta
  return $consultar;
}//Fin función verDxInicial



}//Fin de la clase Empresas

 ?>

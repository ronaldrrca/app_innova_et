<?php include_once '../../controlador/listarUsuariosControlador.php' ?>

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
        <?php include_once 'header.php'; ?>
    </header>
    <main id="main-diagnosticoIni">
        <section id="diagnosticoIni-container">
            <h2>DIAGNÓSTICO INNOVACIÓN <br>
                EXTENSIONISMO TECNOLÓGICO <br>
                #INNOVAET ANTIOQUIA</h2>
                <h3>Diagnóstico inicial</h3>
            <form id="diagnosticoIni-form" action="../../controlador/diagnosticoInicialControlador.php" method="POST">
                <label for="extensionista">Extensionista acompañante</label>
                <select name="extensionista" id="" required>
                    <option value="" selected disabled required>Elija una opción</option>
                    <?php while ($resultado = $listar->fetch_object()) { ?>
                        <option value="<?php echo $resultado->id_usuarios ?> "> <?php echo $resultado->usuarios_nombre ?> </option>
                    <?php } ?>
                </select>
                <label for="nombreEmpresa">Nombre de la empresa</label>
                <input type="text" name="nombreEmpresa" required>
                <label for="nit">Nit</label>
                <input readonly type="number" name="nit" placeholder="Ingrese el nit sin puntos ni guión" value="<?php echo $_GET['nit'] ?>" required>
                <label for="sectorEconomico">Sector económico</label>
                <select name="sectorEconomico" id="" required>
                  <option value="" disabled selected>Elija una opción</option>
                  <option value="Construcción">Construcción</option>
                  <option value="Industrial">Industrial</option>
                  <option value="Servicios">Servicios</option>
                  <option value="Tecnología">Tecnología</option>
                  <option value="Salud">Salud</option>
                  <option value="Comercio">Comercio</option>
                </select>
                <label for="nombreRepresentante">Nombre del representante</label>
                <input type="text" name="nombreRepresentante" required>
                <label for="telefonoContacto">Teléfono de contacto</label>
                <input type="number" name="telefonoContacto" placeholder="Ingrese los 10 dígitos sin espacios ni guión" required>
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" required>
                <label for="paginaWeb">Página web</label>
                <input type="text" name="paginaWeb">
                <label for="plataformaInnovacion">Plataforma de innovacion</label>
                <input type="text" name="plataformaInnovacion">
                <label for="camaraComercio">Registro en cámara y comercio</label>
                <div id="camaraComercio">
                    <div>
                    <label for="camaraComercio">Si</label>
                        <input type="radio" name="camaraComercio" value="1" required>
                    </div>
                    <div>
                    <label for="camaraComercio">No</label>
                        <input type="radio" name="camaraComercio" value="0" required>
                    </div>
                </div>
                <label for="numeroTrabajadores">Número de trabajadores</label>
                <select name="numeroTrabajadores" id="" required>
                  <option value="" selected disabled>Elija una opción</option>
                  <option value="1 a 5 trabajadores">1 a 5 trabajadores</option>
                  <option value="6 a 10 trabajadores">6 a 10 trabajadores</option>
                  <option value="Más de 10 trabajadores">Más de 10 trabajadores</option>
                </select>
                <label for="ventasMensuales">Ventas mensuales</label>
                <select name="ventasMensuales" id="" required>
                  <option value="" selected disabled>Elija una opción</option>
                  <option value="0 a 10.000.000">0 a 10.000.000</option>
                  <option value="10.000.000 a 20.000.000">10.000.000 a 20.000.000</option>
                  <option value="20.000.000 a 50.000.000">20.000.000 a 50.000.000</option>
                  <option value="Más de 50.000.000">Más de 50.000.000</option>
                </select>




                <section class="seccion">
                     <hr id="separador-seccion">
                     <p id="seccion">1. Realice una breve descripción de la empresa (productos o servicios que ofrece, segmento de clientes, trayectoría en el mercado, entre otros)</p>
                      <!-- <label class="encabezado" id="seccion" for="descripcionEmpresa">1. Realice una breve descripción de la empresa (productos o servicios que ofrece, segmento de clientes, trayectoría en el mercado, entre otros)</label> -->
                      <textarea name="descripcionEmpresa" rows="5" required placeholder="Ingrese aquí la descripción"></textarea>
                </section>

                <section class="seccion">
                    <hr id="separador-seccion">
                     <p id="seccion">2. Defina la intensidad de procesos de I+D+i (Investigación, Desarrollo e Innovación) dentro de la organización</p>
                      <!-- <label class="encabezado" id="seccion" for="intensidadProcesosIDI">2. Defina la intensidad de procesos de I+D+i (Investigación, Desarrollo e Innovación) dentro de la organización</label> -->
                      <div id="intensidadProcesosIDI">
                          <div>
                                <label for="intensidadProcesosIDI">Fuerte</label>
                                <input type="radio" name="intensidadProcesosIDI"value="Fuerte" required>
                          </div>
                          <div>
                                <label for="intensidadProcesosIDI">Medio</label>
                                <input type="radio" name="intensidadProcesosIDI"value="Medio" required> 
                          </div>
                          <div>
                                  <label for="intensidadProcesosIDI">Débil</label>
                                  <input type="radio" name="intensidadProcesosIDI"value="Débil" required> 
                          </div>
                                        
                      </div>  
                </section>
                
                <section class="seccion">
                      <article class="encabezado">
                            <hr id="separador-seccion">    
                            <p id="seccion">3. Estrategia de innovación</p>
                      </article>
                      <!--contenidoModelo1 = pregunta, select, observación-->
                      <p class="pregunta">3.1 ¿Actualmente la organización cuenta con una política clara de innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="tres_uno_uno" id=""  required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="tres_uno_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">3.2 ¿La organización cuenta con un área de innovación plenamente identificado dentro de la estructura organizacional?</p>
                      <article class="contenidoModelo1">
                           <select name="tres_dos_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="tres_dos_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">3.3 ¿Se cuenta con un equipo de trabajo inspirado por una visión que  motiva a desarrollar iniciativas innovadoras.?</p>
                      <article class="contenidoModelo1">
                          <select name="tres_tres_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="tres_tres_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">3.4 ¿Se cuenta con indicadores de medición para hacer seguimiento a las iniciativas de innovación y se realiza seguimiento de estos?</p>
                      <article class="contenidoModelo1">
                          <select name="tres_cuatro_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="tres_cuatro_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">3.5 ¿Dentro del equipo de trabajo se pueden tomar decisiones propias para el desarrollo de iniciativas innovadoras?</p>
                      <article class="contenidoModelo1">
                          <select name="tres_cinco_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="tres_cinco_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">3.6 ¿Los líderes están comprometidos con las iniciativas de innovación, destinando presupuesto y tiempo a éstas.?</p>
                      <article class="contenidoModelo1">
                          <select name="tres_seis_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="tres_seis_dos" placeholder="Observaciones">
                      </article>
                </section>

                <section class="seccion">
                      <article class="encabezado">
                            <hr id="separador-seccion">
                          <p id="seccion">4. Gestión de innovación</p>
                      </article>
                      <!--contenidoModelo1 = pregunta, select, observación-->
                      <p class="pregunta">4.1 ¿Se cuentan con recursos económicos suficientes para implementar iniciativas innovadoras?</p>
                      <article class="contenidoModelo1">
                          <select name="cuatro_uno_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="cuatro_uno_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">4.2 ¿Cuanto se destina anualmente en la organización para procesos de innovación?</p>
                      <article class="contenidoModelo1">
                           <select name="cuatro_dos_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="0 a 1.000.000">0 a 1.000.000</option>
                              <option value="1.000.000 a 10.000.000">1.000.000 a 10.000.000</option>
                              <option value="Más de 10.000.000">Más de 10.000.000</option>
                            </select>
                          <input type="text" name="cuatro_dos_dos" placeholder="Obervaciones">
                      </article>
                      <hr>
                      <p class="pregunta">4.3 ¿Se tiene un equipo de trabajo con competencias en innovación que comparten sus conocimientos aprovechando diferentes habilidades y experiencias de todos los integrantes?</p>
                      <article class="contenidoModelo1">
                          <select name="cuatro_tres_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="cuatro_tres_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">4.4 ¿Se cuenta con espacios físicos o virtuales y tecnologías que estimulan la innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="cuatro_cuatro_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="cuatro_cuatro_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">4.5 ¿El equipo de trabajo cuenta con procesos ágiles y flexibles que favorecen la innovación dentro de la organización?</p>
                      <article class="contenidoModelo1">
                          <select name="cuatro_cinco_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="cuatro_cinco_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">4.6 ¿La organización posee un sistema de información donde se gestione todas las actividades de innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="cuatro_seis_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="cuatro_seis_dos" placeholder="Observaciones">
                      </article>
                </section>
                
                <section class="seccion">
                      <article class="encabezado">
                        <hr id="separador-seccion">
                          <p id="seccion">5. Equipo de trabajo</p>
                      </article>
                      <!--contenidoModelo1 = pregunta, select, observación-->
                      <p class="pregunta">5.1 ¿Con cuantos colaboradores cuenta la organización para el desarrollo de procesos de innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="cinco_uno_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Entre 1 y 3 colaboradores">Entre 1 y 3 colaboradores</option>
                              <option value="Entre 3 y 5 colaboradores">Entre 3 y 5 colaboradores</option>
                              <option value="Más de 5 colaboradores">Más de 5 colaboradores</option>
                            </select>
                          <input type="text" name="cinco_uno_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">5.2 ¿Dentro del equipo de trabajo se incentiva la creatividad, impulsando la imaginación para encontrar nuevas soluciones y fomentando la autonomía en el trabajo?</p>
                      <article class="contenidoModelo1">
                           <select name="cinco_dos_uno" id=""required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                            </select>
                          <input type="text" name="cinco_dos_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">5.3 ¿Dentro del equipo de trabajo continuamente se realizan intercambios de conocimiento de manera formal o informal sobre los procesos de innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="cinco_tres_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="cinco_tres_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">5.4 ¿Se incentiva a que las personas adquieran competencias y habilidades en la innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="cinco_cuatro_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="cinco_cuatro_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">5.5 ¿El equipo de trabajo cuenta con una visión alineada con los objetivos estratégicos de la organización?</p>
                      <article class="contenidoModelo1">
                          <select name="cinco_cinco_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="cinco_cinco_dos" placeholder="Observaciones">
                      </article>
                </section>
                <!--contenidoModelo1 = pregunta, checkbox-->
                <section class="seccion">
                      <article class="encabezado">
                         <hr id="separador-seccion">
                          <p id="seccion">6. Cuales serían las motivaciones para el desarrollo de procesos de innovación? (selección multiple)</p>
                      </article>
                      <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.1 Aumento en ventas de bienes y servicios</p>
                          <input type='hidden' name='seis_uno' value='0'>
                          <input type="checkbox" name="seis_uno" value="1">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.2 Introducción o aumento en el segmento de clientes</p>
                          <input type='hidden' name='seis_dos' value='0'>
                          <input type="checkbox" name="seis_dos" value="1">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.3 Desarrollo de nuevas tecnologías</p>
                          <input type='hidden' name='seis_tres' value='0'>
                          <input type="checkbox" name="seis_tres" value="1">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.4 Cambios en el entorno</p>
                          <input type='hidden' name='seis_cuatro' value='0'>
                          <input type="checkbox" name="seis_cuatro" value="1">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.5 Politícas gubernamentales</p>
                          <input type='hidden' name='seis_cinco' value='0'>
                          <input type="checkbox" name="seis_cinco" value="1">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.6 Introducción o aumento en el segmento de mercado</p>
                          <input type='hidden' name='seis_seis' value='0'>
                          <input type="checkbox" name="seis_seis" value="1">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.7 Pivote de productos</p>
                          <input type='hidden' name='seis_siete' value='0'>
                          <input type="checkbox" name="seis_siete" value="1">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.8 Optimización de actividades al interior de la organización</p>
                          <input type='hidden' name='seis_ocho' value='0'>
                          <input type="checkbox" name="seis_ocho" value="1">  
                    </article>
                </section>
                 
                <section class="seccion">
                      <article class="encabezado">
                        <hr id="separador-seccion">
                          <p id="seccion">7. Ruta de innovación</p>
                      </article>
                      <p class="pregunta">7.1 ¿Se incentiva a que las personas adquieran competencias y habilidades en la innovación?</p>
                      <article class="contenidoModelo2">
                      <div class="ruta-innovacion">
                          <div>
                                <label for="siete_uno_uno">Si</label>
                                <input id="si7_1" type="radio" value="1" name="siete_uno_uno" required>
                          </div>
                          <div>
                                <label for="siete_uno_uno">No</label>
                                <input id="no7_1" type="radio" value="0" name="siete_uno_uno" required>
                          </div>
                                                        
                        </div>
                          <input id="siete_uno_dos" type="text" name="siete_uno_dos" placeholder="Descripción iniciativa de innovación">
                          <select name="siete_uno_tres" id="siete_uno_tres">
                            <option value="" selected readonly>Fase de la inicitiva</option>
                            <option value="Ninguna">Ninguna</option>
                            <option value="Identificación de oportunidad">Identificación de oportunidad</option>
                            <option value="Ideación">Ideación</option>
                            <option value="Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)">Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)</option>
                            <option value="Diseño de un producto o servicio mínimo viable">Diseño de un producto o servicio mínimo viable</option>
                            <option value="Validación inicial de mercado">Validación inicial de mercado</option>
                            <option value="Escalabilidad de la innovación">Escalabilidad de la innovación</option>
                            <option value="Comercialización">Comercialización</option>
                          </select>
                      </article>
                      <hr>
                      <p class="pregunta">7.2 ¿La organización ha identificado oportunidades de innovación enfocadas en mejoras al producto o servicio?</p>
                      <article class="contenidoModelo2">
                          <div class="ruta-innovacion">
                          <div>
                                <label for="siete_dos_uno">Si</label>
                                <input id="si7_2" type="radio" value="1" name="siete_dos_uno" required>
                            </div>
                            <div>
                                <label for="siete_dos_uno">No</label>
                                <input id="no7_2" type="radio" value="0" name="siete_dos_uno" required>
                            </div>
                          </div>
                          
                          <input id="siete_dos_dos" type="text" name="siete_dos_dos" placeholder="Descripción iniciativa de innovación">
                          <select name="siete_dos_tres" id="siete_dos_tres">
                            <option value="" readonly selected>Fase de la iniciativa</option> 
                            <option value="Ninguna">Ninguna</option>
                            <option value="Identificación de oportunidad">Identificación de oportunidad</option>
                            <option value="Ideación">Ideación</option>
                            <option value="Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)">Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)</option>
                            <option value="Diseño de un producto o servicio mínimo viable">Diseño de un producto o servicio mínimo viable</option>
                            <option value="Validación inicial de mercado">Validación inicial de mercado</option>
                            <option value="Escalabilidad de la innovación">Escalabilidad de la innovación</option>
                            <option value="Comercialización">Comercialización</option>
                          </select>
                      </article>
                      <hr>
                      <p class="pregunta">7.3 ¿La organización ha identificado oportunidades de innovación enfocadas en la implementación de nuevas metodologías para el proceso de comercialización de productos o servicios?</p>
                      <article class="contenidoModelo2">
                          <div class="ruta-innovacion">
                            <div>
                                    <label for="siete_tres_uno">Si</label>
                                    <input id="si7_3" type="radio" value="1" name="siete_tres_uno" required>
                                </div>
                                <div>
                                    <label for="siete_tres_uno">No</label>
                                    <input id="no7_3" type="radio" value="0" name="siete_tres_uno" required>
                                </div>
                          </div>
                          
                          <input id="siete_tres_dos" type="text" name="siete_tres_dos" placeholder="Descripción iniciativa de innovación">
                          <select name="siete_tres_tres" id="siete_tres_tres">
                            <option value="" readonly selected>Fase de la iniciativa</option> 
                            <option value="Ninguna">Ninguna</option>
                            <option value="Identificación de oportunidad">Identificación de oportunidad</option>
                            <option value="Ideación">Ideación</option>
                            <option value="Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)">Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)</option>
                            <option value="Diseño de un producto o servicio mínimo viable">Diseño de un producto o servicio mínimo viable</option>
                            <option value="Validación inicial de mercado">Validación inicial de mercado</option>
                            <option value="Escalabilidad de la innovación">Escalabilidad de la innovación</option>
                            <option value="Comercialización">Comercialización</option>
                          </select>
                      </article>
                      <hr>
                      <p class="pregunta">7.4 ¿La organización ha identificado oportunidades de innovación enfocadas en la incorporación de nuevas metodologías para mejorar la experiencia del usuario para la adquisición de bienes y servicios</p>
                      <article class="contenidoModelo2">
                          <div class="ruta-innovacion">
                              <div>
                                    <label for="siete_cuatro_uno">Si</label>
                                    <input id="si7_4" type="radio" value="1" name="siete_cuatro_uno" required>
                              </div>
                              <div>
                              <label for="siete_cuatro_uno">No</label>
                                    <input id="no7_4" type="radio" value="0" name="siete_cuatro_uno" required>
                                    </div>
                          </div>
                          
                          <input id="siete_cuatro_dos" type="text" name="siete_cuatro_dos" placeholder="Descripción iniciativa de innovación">
                          <select name="siete_cuatro_tres" id="siete_cuatro_tres">
                            <option value="" readonly selected>Fase de la iniciativa</option> 
                            <option value="Ninguna">Ninguna</option>
                            <option value="Identificación de oportunidad">Identificación de oportunidad</option>
                            <option value="Ideación">Ideación</option>
                            <option value="Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)">Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)</option>
                            <option value="Diseño de un producto o servicio mínimo viable">Diseño de un producto o servicio mínimo viable</option>
                            <option value="Validación inicial de mercado">Validación inicial de mercado</option>
                            <option value="Escalabilidad de la innovación">Escalabilidad de la innovación</option>
                            <option value="Comercialización">Comercialización</option>
                          </select>
                      </article>
                      <hr>
                      <p class="pregunta">7.5 La organización ha identificado oportunidades de innovación enfocadas en la implementación de un método de producción o entrega nuevo o significativamente mejorado (optimización de procesos)</p>
                      <article class="contenidoModelo2">
                          <div class="ruta-innovacion">
                              <div>
                                    <label for="siete_cinco_uno">Si</label>
                                    <input id="si7_5" type="radio" value="1" name="siete_cinco_uno" required>    
                              </div>
                              <div>
                                    <label for="siete_cinco_uno">No</label>
                                    <input id="no7_5" type="radio" value="0" name="siete_cinco_uno" required>
                              </div>
                          </div>
                          
                          <input id="siete_cinco_dos" type="text" name="siete_cinco_dos" placeholder="Descripción iniciativa de innovación">
                          <select name="siete_cinco_tres" id="siete_cinco_tres">    
                            <option value="" readonly selected>Fase de la iniciativa</option> 
                            <option value="Ninguna">Ninguna</option>
                            <option value="Identificación de oportunidad">Identificación de oportunidad</option>
                            <option value="Ideación">Ideación</option>
                            <option value="Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)">Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)</option>
                            <option value="Diseño de un producto o servicio mínimo viable">Diseño de un producto o servicio mínimo viable</option>
                            <option value="Validación inicial de mercado">Validación inicial de mercado</option>
                            <option value="Escalabilidad de la innovación">Escalabilidad de la innovación</option>
                            <option value="Comercialización">Comercialización</option>
                          </select>
                      </article>
                </section>

                <section class="seccion">
                    <hr id="separador-seccion">
                        <p id="seccion">8. Identifique la iniciativa de innovación que deba ser priorizada </p>
                      <!-- <label class="encabezado" id="seccion" for="ocho_uno">8. Identifique la iniciativa de innovación que deba ser priorizada </label> -->
                      <textarea name="ocho_uno" rows="5" placeholder="Ingrese aquí la descripción"></textarea>
               </section>

                <section class="seccion">
                      <article class="encabezado">
                        <hr id="separador-seccion">
                          <p id="seccion">9. ¿Cómo definiría la iniciativa de innovación priorizada? </p>
                      </article>
                      <article class="seleccionMultiple">
                          <p class="preguntaModelo2">9.1 Incremental: Valor agregado a un producto que ya existe dentro del mercado</p>
                          <input type="radio" value="Incremental" name="nueve_uno" required>  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">9.2 Radical: Creación de una propuesta de valor completamente nueva de un producto o servicio</p>
                          <input type="radio" value="Radical" name="nueve_uno" required>  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">9.3 Disruptiva: Innovaciones que afectan a una determinada industria de tal modo que hacen que ésta cambie.</p>
                          <input type="radio" value="Disruptiva" name="nueve_uno" required>  
                    </article>
                    
                </section>

                <section class="seccion">
                      <article class="encabezado">
                        <hr id="separador-seccion">
                          <p id="seccion">10. Nivel de TLR</p>
                      </article> 
                      <!--contenidoModelo1 = pregunta, select, observación-->
                       <p class="pregunta">10.1 ¿Finalizó con la investigación básica de su idea de innovación identificando principios nuevos que puedan ser utilizados en nuevas tecnologías?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_uno_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="diez_uno_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">10.2 ¿Realizó un análisis de los artículos cientificos, modelos o teorías científicas, patentes que respaldan la aplicación de la idea en algún área tecnológica?</p>
                      <article class="contenidoModelo1">
                           <select name="diez_dos_uno" id="" required>
                           <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                            </select>
                          <input type="text" name="diez_dos_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">10.3 ¿Ha identificado los potenciales usuarios de la innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_tres_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="diez_tres_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">10.4 ¿Tiene identificados los componentes de su innovación tecnológica y principios de manufactura?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_cuatro_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="diez_cuatro_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">10.5 ¿Ha llevado a cabo algún proceso de validación en laboratorio o de mercado sobre su innovación? (I+D en laboratorio más primeras pláticas con posibles usuarios)</p>
                      <article class="contenidoModelo1">
                          <select name="diez_cinco_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="diez_cinco_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">10.6 ¿Ha realizado un estudio sobre los aspectos regulatorios (comités de ética, normas, ISO's y certificaciones), mecanismos de protección (patentes) que son requeridos para su innovación tecnológica?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_seis_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="diez_seis_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">10.7 ¿Tiene identificado los riesgos tecnológicos de mercado y financieros de la innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_siete_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="diez_siete_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">10.8 ¿El prototipo a escala real cumple con las normas y/o previsiones legales o de medio ambiente del sector?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_ocho_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="diez_ocho_dos" placeholder="Observaciones">
                      </article>
                      <hr>
                      <p class="pregunta">10.9 ¿Cuenta con una organización operativa y estructura organizacional acorde a las necesidades de operación de la producción de la innovación? (mercadotecnia, logística, producción y otros)</p>
                      <article class="contenidoModelo1">
                          <select name="diez_nueve_uno" id="" required>
                              <option value="" disabled selected>Elija una opción</option>
                              <option value="Muy bajo">Muy bajo</option>
                              <option value="Bajo">Bajo</option>
                              <option value="Medio">Medio</option>
                              <option value="Medio alto">Medio alto</option>
                              <option value="Alto">Alto</option>
                          </select>
                          <input type="text" name="diez_nueve_dos" placeholder="Observaciones">
                      </article>
                      
                </section>

                <section class="seccion">
                      <article class="encabezado">
                        <hr id="separador-seccion">
                          <p id="seccion">11. Cuales han sido las principales dificultades identificadas en el momento de desarrollar procesos de innovación dentro de la organización? (selección multiple)</p>
                      </article>
                      <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.1 Conocimientos y habilidades del equipo de trabajo</p>
                          <input type="hidden" value="0" name="once_uno">
                          <input type="checkbox" value="1" name="once_uno">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.2 Acceso a fuentes de financiación para desarrollo de procesos de innovación</p>
                          <input type="hidden" value="0" name="once_dos">
                          <input type="checkbox" value="1" name="once_dos">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.3 Falta de compromiso de línea estratégica de la organización</p>
                          <input type="hidden" value="0" name="once_tres">
                          <input type="checkbox" value="1" name="once_tres">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.4 Dedicación en tiempo específico para desarrollo de procesos de innovación</p>
                          <input type="hidden" value="0" name="once_cuatro">
                          <input type="checkbox" value="1" name="once_cuatro">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.5 Falta de un equipo de trabajo destinado a procesos de innovación</p>
                          <input type="hidden" value="0" name="once_cinco">
                          <input type="checkbox" value="1" name="once_cinco">  
                    </article>
                </section>
 
                <section class="seccion">
                      <article class="encabezado">
                        <hr id="separador-seccion">
                          <p id="seccion">12. Que acciones de acompañamiento le gustaría obtener del programa #InnovaETAntioquia (selección múltiple)</p>
                      </article>
                      <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.1 Estructuración del proyecto de innovación</p>
                          <input type="hidden" value="0" name="doce_uno">
                          <input type="checkbox" value="1" name="doce_uno">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.2 Acercamiento con potenciales fuentes de financiación</p>
                          <input type="hidden" value="0" name="doce_dos">
                          <input type="checkbox" value="1" name="doce_dos">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.3 Acercamiento con Hub de Innovación</p>
                          <input type="hidden" value="0" name="doce_tres">
                          <input type="checkbox" value="1" name="doce_tres">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.4 Acercamiento con Tecnoparque SENA</p>
                          <input type="hidden" value="0" name="doce_cuatro">
                          <input type="checkbox" value="1" name="doce_cuatro">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.5 Acercamiento Grupos de Investigación</p>
                          <input type="hidden" value="0" name="doce_cinco">
                          <input type="checkbox" value="1" name="doce_cinco">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.6 Acercamiento Laboratorio Huawei del SENA</p>
                          <input type="hidden" value="0" name="doce_seis">
                          <input type="checkbox" value="1" name="doce_seis">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.7 Formación en procesos de I+D+i para fortalecimiento del conocimiento dentro de la organización</p>
                          <input type="hidden" value="0" name="doce_siete">
                          <input type="checkbox" value="1" name="doce_siete">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.8 Servicios Tecnológicos</p>
                          <input type="hidden" value="0" name="doce_ocho">
                          <input type="checkbox" value="1" name="doce_ocho">  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.9 Servicios de laboratorio (Centros de Formación)</p>
                          <input type="hidden" value="0" name="doce_nueve">
                          <input type="checkbox" value="1" name="doce_nueve">  
                    </article> 
                </section> 
                <hr id="separador-seccion">
                <article id="submit-inicio">
                                <input id="enviar-diagnostico" type="submit" value="Enviar">
                        </article>
            </form>
        </section>
    </main>
    <footer>
        <?php include_once 'footer.php'; ?>
    </footer>
  
</body>
<script src="../js/diagnosticoInicial.js"></script>
</html>

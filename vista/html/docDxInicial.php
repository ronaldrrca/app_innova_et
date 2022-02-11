<?php require_once('../../controlador/verDocDxInicialControlador.php'); ?>

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
    <main id="main-docDxInicial">
        <section id="diagnosticoIni-container">
            <h2>DIAGNÓSTICO INNOVACIÓN <br>
                EXTENSIONISMO TECNOLÓGICO <br>
                #INNOVAET ANTIOQUIA</h2>
                <h3>Diagnóstico inicial</h3>
            <form id="diagnosticoIni-form">
                <label for="nombreEmpresa">Nombre de la empresa</label>
                <input type="text" readonly value="<?php echo $respuesta['empresas_dx_ini_nombre'] ?>">
                <label for="fecha">Fecha y hora del diagnóstico</label>
                <input type="text" readonly value="<?php echo $respuesta['empresas_fecha'] ?>">
                <label for="nit">Nit</label>
                <input type="number" readonly value="<?php echo $respuesta['empresas_nit'] ?>">
                <label for="sectorEconomico">Sector económico</label>
                <input type="text" readonly value="<?php echo $respuesta['empresas_sectorEconomico'] ?>">
                <label for="nombreRepresentante">Nombre del representante</label>
                <input type="text" readonly value="<?php echo $respuesta['empresas_representante'] ?>">
                <label for="telefonoContacto">Teléfono de contacto</label>
                <input type="number" readonly value="<?php echo $respuesta['empresas_numeroContacto'] ?>">
                <label for="email">Correo electrónico</label>
                <input type="email" readonly value="<?php echo $respuesta['empresas_email'] ?>">
                <label for="paginaWeb">Página web</label>
                <input type="text" readonly value="<?php echo $respuesta['empresas_paginaWeb'] ?>">
                <label for="plataformaInnovacion">Plataforma de innovacion</label>
                <input type="text" readonly value="<?php echo $respuesta['empresas_plataformaInnovacion'] ?>">
                <label for="camaraComercio">Registro en cámara y comercio</label>
                <div id="camaraComercio">
                    <div>
                    <label for="camaraComercio">Si</label>
                        <input type="radio" disabled <?php if ($respuesta['empresas_registroCamaraComercio'] == 1) { ?>
                            checked <?php } ?> >
                    </div>
                    <div>
                    <label for="camaraComercio">No</label>
                    <input type="radio" disabled <?php if ($respuesta['empresas_registroCamaraComercio'] == 0) { ?>
                            checked <?php } ?> >
                    </div>
                </div>
                <label for="numeroTrabajadores">Número de trabajadores</label>
                <input type="text" readonly value="<?php echo $respuesta['empresas_numeroTrabajadores'] ?>">
                <label for="ventasMensuales">Ventas mensuales</label>
                <input type="text" readonly value="<?php echo $respuesta['empresas_ventasMensuales'] ?>">

                <section class="seccion">
                     <hr id="separador-seccion">
                     <p id="seccion">1. Realice una breve descripción de la empresa (productos o servicios que ofrece, segmento de clientes, trayectoría en el mercado, entre otros)</p>
                      <!-- <label class="encabezado" id="seccion" for="descripcionEmpresa">1. Realice una breve descripción de la empresa (productos o servicios que ofrece, segmento de clientes, trayectoría en el mercado, entre otros)</label> -->
                      <textarea name="descripcionEmpresa" readonly rows="5" ><?php echo $respuesta['empresas_descripcion'] ?></textarea>
                </section>

                <section class="seccion">
                    <hr id="separador-seccion">
                     <p id="seccion">2. Defina la intensidad de procesos de I+D+i (Investigación, Desarrollo e Innovación) dentro de la organización</p>
                      <!-- <label class="encabezado" id="seccion" for="intensidadProcesosIDI">2. Defina la intensidad de procesos de I+D+i (Investigación, Desarrollo e Innovación) dentro de la organización</label> -->
                      <div id="intensidadProcesosIDI">
                          <div>
                                <label for="intensidadProcesosIDI">Fuerte</label>
                                <input type="radio" disabled <?php if ($respuesta['empresas_intensidadIDI'] == "Fuerte") {?> 
                                    checked <?php } ?> >
                                
                          </div>
                          <div>
                                    <label for="intensidadProcesosIDI">Medio</label>
                                    <input type="radio" disabled <?php if ($respuesta['empresas_intensidadIDI'] == "Medio") {?> 
                                    checked <?php } ?> >
                          </div>
                          <div>
                                  <label for="intensidadProcesosIDI">Débil</label>
                                  <input type="radio" disabled <?php if ($respuesta['empresas_intensidadIDI'] == "Débil") {?> 
                                    checked <?php } ?> >
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
                          <select>
                              <option readonly value=""><?php if ($respuesta['empresas_3.1.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_3.1.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_3.1.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_3.1.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_3.1.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                            </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_3.1.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">3.2 ¿La organización cuenta con un área de innovación plenamente identificado dentro de la estructura organizacional?</p>
                      <article class="contenidoModelo1">
                      <select>
                      <option readonly value=""><?php if ($respuesta['empresas_3.2.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_3.2.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_3.2.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_3.2.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_3.2.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_3.2.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">3.3 ¿Se cuenta con un equipo de trabajo inspirado por una visión que  motiva a desarrollar iniciativas innovadoras.?</p>
                      <article class="contenidoModelo1">
                          <select name="tres_tres_uno" id="" required>
                          <option readonly value=""><?php if ($respuesta['empresas_3.3.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_3.3.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_3.3.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_3.3.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_3.3.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_3.3.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">3.4 ¿Se cuenta con indicadores de medición para hacer seguimiento a las iniciativas de innovación y se realiza seguimiento de estos?</p>
                      <article class="contenidoModelo1">
                          <select name="tres_cuatro_uno" id="" required>
                          <option readonly value=""><?php if ($respuesta['empresas_3.4.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_3.4.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_3.4.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_3.4.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_3.4.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_3.4.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">3.5 ¿Dentro del equipo de trabajo se pueden tomar decisiones propias para el desarrollo de iniciativas innovadoras?</p>
                      <article class="contenidoModelo1">
                          <select name="tres_cinco_uno" id="" required>
                          <option readonly value=""><?php if ($respuesta['empresas_3.5.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_3.5.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_3.5.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_3.5.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_3.5.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_3.5.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">3.6 ¿Los líderes están comprometidos con las iniciativas de innovación, destinando presupuesto y tiempo a éstas.?</p>
                      <article class="contenidoModelo1">
                          <select name="tres_seis_uno" id="" required>
                          <option readonly value=""><?php if ($respuesta['empresas_3.6.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_3.6.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_3.6.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_3.6.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_3.6.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_3.6.2'] ?>">
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
                                <option readonly value=""><?php if ($respuesta['empresas_4.1.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_4.1.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_4.1.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_4.1.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_4.1.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_4.1.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">4.2 ¿Cuanto se destina anualmente en la organización para procesos de innovación?</p>
                      <article class="contenidoModelo1">
                           <select name="cuatro_dos_uno" id="" required>
                                <option readonly value=""><?php if ($respuesta['empresas_4.2.1'] == "0 a 1.000.000") { 
                                   echo "0 a 1.000.000"; }elseif ($respuesta['empresas_4.2.1'] == "1.000.000 a 10.000.000") {
                                   echo "1.000.000 a 10.000.000"; }elseif ($respuesta['empresas_4.2.1'] == "Más de 10.000.000") {
                                   echo "Más de 10.000.000";}else {} ?>
                                </option>      
                            </select>
                            <input type="text" readonly value="<?php echo $respuesta['empresas_4.2.2'] ?>">
                        </article>

                      <hr>
                      <p class="pregunta">4.3 ¿Se tiene un equipo de trabajo con competencias en innovación que comparten sus conocimientos aprovechando diferentes habilidades y experiencias de todos los integrantes?</p>
                      <article class="contenidoModelo1">
                          <select name="cuatro_tres_uno" id="" required>
                                <option readonly value=""><?php if ($respuesta['empresas_4.3.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_4.3.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_4.3.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_4.3.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_4.3.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_4.3.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">4.4 ¿Se cuenta con espacios físicos o virtuales y tecnologías que estimulan la innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="cuatro_cuatro_uno" id="" required>
                                <option readonly value=""><?php if ($respuesta['empresas_4.4.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_4.4.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_4.4.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_4.4.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_4.4.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_4.4.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">4.5 ¿El equipo de trabajo cuenta con procesos ágiles y flexibles que favorecen la innovación dentro de la organización?</p>
                      <article class="contenidoModelo1">
                          <select name="cuatro_cinco_uno" id="" required>
                                <option readonly value=""><?php if ($respuesta['empresas_4.5.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_4.5.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_4.5.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_4.5.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_4.5.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_4.5.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">4.6 ¿La organización posee un sistema de información donde se gestione todas las actividades de innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="cuatro_seis_uno" id="" required>
                          <option readonly value=""><?php if ($respuesta['empresas_4.6.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_4.6.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_4.6.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_4.6.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_4.6.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_4.6.2'] ?>">
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
                          <select name="cinco_uno_uno" id="">
                                <option readonly value=""><?php if ($respuesta['empresas_5.1.1'] == "Entre 1 y 3 colaboradores") { 
                                   echo "Entre 1 y 3 colaboradores"; }elseif ($respuesta['empresas_5.1.1'] == "Entre 3 y 5 colaboradores") {
                                   echo "Entre 3 y 5 colaboradores"; }elseif ($respuesta['empresas_5.1.1'] == "Más de 5 colaboradores") {
                                   echo "Más de 5 colaboradores";}else {} ?>
                                </option>
                           </select>
                           <input type="text" readonly value="<?php echo $respuesta['empresas_5.1.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">5.2 ¿Dentro del equipo de trabajo se incentiva la creatividad, impulsando la imaginación para encontrar nuevas soluciones y fomentando la autonomía en el trabajo?</p>
                      <article class="contenidoModelo1">
                           <select name="cinco_dos_uno" id=""required>
                                <option readonly value=""><?php if ($respuesta['empresas_5.2.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_5.2.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_5.2.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_5.2.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_5.2.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                            </select>
                            <input type="text" readonly value="<?php echo $respuesta['empresas_5.2.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">5.3 ¿Dentro del equipo de trabajo continuamente se realizan intercambios de conocimiento de manera formal o informal sobre los procesos de innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="cinco_tres_uno" id="" required>
                                <option readonly value=""><?php if ($respuesta['empresas_5.3.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_5.3.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_5.3.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_5.3.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_5.3.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_5.3.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">5.4 ¿Se incentiva a que las personas adquieran competencias y habilidades en la innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="cinco_cuatro_uno" id="" required>
                                <option readonly value=""><?php if ($respuesta['empresas_5.4.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_5.4.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_5.4.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_5.4.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_5.4.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_5.4.2'] ?>">
                      </article>
                      <hr>
                      <p class="pregunta">5.5 ¿El equipo de trabajo cuenta con una visión alineada con los objetivos estratégicos de la organización?</p>
                      <article class="contenidoModelo1">
                          <select name="cinco_cinco_uno" id="" required>
                                <option readonly value=""><?php if ($respuesta['empresas_5.5.1'] == "Muy bajo") { 
                                   echo "Muy bajo"; }elseif ($respuesta['empresas_5.5.1'] == "Bajo") {
                                   echo "Bajo"; }elseif ($respuesta['empresas_5.5.1'] == "Medio") {
                                   echo "Medio";}elseif ($respuesta['empresas_5.5.1'] == "Medio alto") {
                                   echo "Medio alto";}elseif ($respuesta['empresas_5.5.1'] == "Alto") {
                                   echo "Alto";}else {} ?>
                                </option>
                          </select>
                          <input type="text" readonly value="<?php echo $respuesta['empresas_5.5.2'] ?>">
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
                          <input disabled type='checkbox' <?php if ($respuesta['empresas_6.1'] == 1) { ?>
                              checked <?php } ?> >
                        </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.2 Introducción o aumento en el segmento de clientes</p>
                          <input disabled type='checkbox' <?php if ($respuesta['empresas_6.2'] == 1) { ?>
                              checked <?php } ?> >   
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.3 Desarrollo de nuevas tecnologías</p>
                          <input disabled type='checkbox' <?php if ($respuesta['empresas_6.3'] == 1) { ?>
                              checked <?php } ?> >
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.4 Cambios en el entorno</p>
                          <input disabled type='checkbox' <?php if ($respuesta['empresas_6.4'] == 1) { ?>
                              checked <?php } ?> > 
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.5 Politícas gubernamentales</p>
                          <input disabled type='checkbox' <?php if ($respuesta['empresas_6.5'] == 1) { ?>
                              checked <?php } ?> > 
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.6 Introducción o aumento en el segmento de mercado</p>
                          <input disabled type='checkbox' <?php if ($respuesta['empresas_6.6'] == 1) { ?>
                              checked <?php } ?> > 
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.7 Pivote de productos</p>
                          <input disabled type='checkbox' <?php if ($respuesta['empresas_6.7'] == 1) { ?>
                              checked <?php } ?> >
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">6.8 Optimización de actividades al interior de la organización</p>
                          <input disabled type='checkbox' <?php if ($respuesta['empresas_6.8'] == 1) { ?>
                              checked <?php } ?> >
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
                                <input id="si7_1resultado" disabled type="radio" <?php if ($respuesta['empresas_7.1.1'] == 1) { ?> 
                                    checked <?php } ?> >
                          </div>
                          <div>
                                <label for="siete_uno_uno">No</label>
                                <input id="no7_1resultado" disabled type="radio" <?php if ($respuesta['empresas_7.1.1'] == 0) { ?> 
                                    checked <?php } ?> >
                          </div>
                                                        
                        </div>
                          <input id="" type="text" disabled value="<?php echo $respuesta['empresas_7.1.2'] ?>">
                          <select name="siete_uno_tres" id="">
                                <option value="" selected readonly> <?php echo $respuesta['empresas_7.1.3'] ?> </option>
                           
                          </select>
                      </article>
                      <hr>
                      <p class="pregunta">7.2 ¿La organización ha identificado oportunidades de innovación enfocadas en mejoras al producto o servicio?</p>
                      <article class="contenidoModelo2">
                          <div class="ruta-innovacion">
                          <div>
                                <label for="siete_dos_uno">Si</label>
                                <input id="si7_2resultado" disabled type="radio" <?php if ($respuesta['empresas_7.2.1'] == 1) { ?> 
                                    checked <?php } ?> >
                          </div>
                          <div>
                                <label for="siete_uno_uno">No</label>
                                <input id="no7_2resultado" disabled type="radio" <?php if ($respuesta['empresas_7.2.1'] == 0) { ?> 
                                    checked <?php } ?> >
                          </div> 
                          </div>
                          
                          <input id="" type="text" disabled value="<?php echo $respuesta['empresas_7.2.2'] ?>">
                          <select name="siete_uno_tres" id="">
                                <option value="" selected readonly> <?php echo $respuesta['empresas_7.2.3'] ?> </option>
                           
                           </select>
                      </article>
                      <hr>
                      <p class="pregunta">7.3 ¿La organización ha identificado oportunidades de innovación enfocadas en la implementación de nuevas metodologías para el proceso de comercialización de productos o servicios?</p>
                      <article class="contenidoModelo2">
                          <div class="ruta-innovacion">
                          <div>
                                <label for="siete_tres_uno">Si</label>
                                <input id="si7_3resultado" disabled type="radio" <?php if ($respuesta['empresas_7.3.1'] == 1) { ?> 
                                    checked <?php } ?> >
                          </div>
                          <div>
                                <label for="siete_tres_uno">No</label>
                                <input id="no7_3resultado" disabled type="radio" <?php if ($respuesta['empresas_7.3.1'] == 0) { ?> 
                                    checked <?php } ?> >
                          </div> 
                          </div>
                          
                          <input id="" type="text" disabled value="<?php echo $respuesta['empresas_7.3.2'] ?>">
                          <select name="siete_uno_tres" id="">
                                <option value="" selected readonly> <?php echo $respuesta['empresas_7.3.3'] ?> </option>
                           
                          </select>
                      </article>
                      <hr>
                      <p class="pregunta">7.4 ¿La organización ha identificado oportunidades de innovación enfocadas en la incorporación de nuevas metodologías para mejorar la experiencia del usuario para la adquisición de bienes y servicios</p>
                      <article class="contenidoModelo2">
                          <div class="ruta-innovacion">
                          <div>
                                <label for="siete_cuatro_uno">Si</label>
                                <input id="si7_4resultado" disabled type="radio" <?php if ($respuesta['empresas_7.4.1'] == 1) { ?> 
                                    checked <?php } ?> >
                          </div>
                          <div>
                                <label for="siete_cuatro_uno">No</label>
                                <input id="no7_4resultado" disabled type="radio" <?php if ($respuesta['empresas_7.4.1'] == 0) { ?> 
                                    checked <?php } ?> >
                          </div>
                          </div>
                          
                          <input id="" type="text" disabled value="<?php echo $respuesta['empresas_7.4.2'] ?>">
                          <select name="siete_uno_tres" id="">
                                <option value="" selected readonly> <?php echo $respuesta['empresas_7.4.3'] ?> </option>
                           
                          </select>
                      </article>
                      <hr>
                      <p class="pregunta">7.5 La organización ha identificado oportunidades de innovación enfocadas en la implementación de un método de producción o entrega nuevo o significativamente mejorado (optimización de procesos)</p>
                      <article class="contenidoModelo2">
                          <div class="ruta-innovacion">
                          <div>
                                <label for="siete_cinco_uno">Si</label>
                                <input id="si7_5resultado" disabled type="radio" <?php if ($respuesta['empresas_7.5.1'] == 1) { ?> 
                                    checked <?php } ?> >
                          </div>
                          <div>
                                <label for="siete_uno_uno">No</label>
                                <input id="no7_5resultado" disabled type="radio" <?php if ($respuesta['empresas_7.5.1'] == 0) { ?> 
                                    checked <?php } ?> >
                          </div>
                          </div>
                          
                          <input id="" type="text" disabled value="<?php echo $respuesta['empresas_7.5.2'] ?>">
                          <select name="siete_uno_tres" id="">
                                <option value="" selected readonly> <?php echo $respuesta['empresas_7.5.3'] ?> </option>
                           
                          </select>
                      </article>
                </section>

                <section class="seccion">
                    <hr id="separador-seccion">
                        <p id="seccion">8. Identifique la iniciativa de innovación que deba ser priorizada </p>
                      <!-- <label class="encabezado" id="seccion" for="ocho_uno">8. Identifique la iniciativa de innovación que deba ser priorizada </label> -->
                      <textarea disabled rows="5" ><?php echo $respuesta['empresas_8.1'] ?> </textarea>
               </section>

                <section class="seccion">
                      <article class="encabezado">
                        <hr id="separador-seccion">
                          <p id="seccion">9. ¿Cómo definiría la iniciativa de innovación priorizada? </p>
                      </article>
                      <article class="seleccionMultiple">
                          <p class="preguntaModelo2">9.1 Incremental: Valor agregado a un producto que ya existe dentro del mercado</p>
                          <input disabled type="radio" <?php if ($respuesta['empresas_9.1'] == "Incremental") { ?>
                              checked
                          <?php } ?> >  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">9.2 Radical: Creación de una propuesta de valor completamente nueva de un producto o servicio</p>
                          <input disabled type="radio" <?php if ($respuesta['empresas_9.1'] == "Radical") { ?>
                              checked
                          <?php } ?> >   
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">9.3 Disruptiva: Innovaciones que afectan a una determinada industria de tal modo que hacen que ésta cambie.</p>
                          <input disabled type="radio" <?php if ($respuesta['empresas_9.1'] == "Disruptiva") { ?>
                              checked
                          <?php } ?> >   
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
                              <option value="" disabled selected> <?php echo $respuesta['empresas_10.1.1'] ?></option>
                              
                          </select>
                          <input type="text" disabled value=" <?php echo $respuesta['empresas_10.1.2'] ?>" >
                      </article>
                      <hr>
                      <p class="pregunta">10.2 ¿Realizó un análisis de los artículos cientificos, modelos o teorías científicas, patentes que respaldan la aplicación de la idea en algún área tecnológica?</p>
                      <article class="contenidoModelo1">
                           <select name="diez_dos_uno" id="" required>
                                <option value="" disabled selected> <?php echo $respuesta['empresas_10.2.1'] ?></option>
                            </select>
                            <input type="text" disabled value=" <?php echo $respuesta['empresas_10.2.2'] ?>" >
                      </article>
                      <hr>
                      <p class="pregunta">10.3 ¿Ha identificado los potenciales usuarios de la innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_tres_uno" id="" required>
                                <option value="" disabled selected> <?php echo $respuesta['empresas_10.3.1'] ?></option>
                          </select>
                          <input type="text" disabled value=" <?php echo $respuesta['empresas_10.3.2'] ?>" >
                      </article>
                      <hr>
                      <p class="pregunta">10.4 ¿Tiene identificados los componentes de su innovación tecnológica y principios de manufactura?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_cuatro_uno" id="" required>
                            <option value="" disabled selected> <?php echo $respuesta['empresas_10.4.1'] ?></option>
                          </select>
                          <input type="text" disabled value=" <?php echo $respuesta['empresas_10.4.2'] ?>" >
                      </article>
                      <hr>
                      <p class="pregunta">10.5 ¿Ha llevado a cabo algún proceso de validación en laboratorio o de mercado sobre su innovación? (I+D en laboratorio más primeras pláticas con posibles usuarios)</p>
                      <article class="contenidoModelo1">
                          <select name="diez_cinco_uno" id="" required>
                            <option value="" disabled selected> <?php echo $respuesta['empresas_10.5.1'] ?></option>
                          </select>
                          <input type="text" disabled value=" <?php echo $respuesta['empresas_10.5.2'] ?>" >
                      </article>
                      <hr>
                      <p class="pregunta">10.6 ¿Ha realizado un estudio sobre los aspectos regulatorios (comités de ética, normas, ISO's y certificaciones), mecanismos de protección (patentes) que son requeridos para su innovación tecnológica?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_seis_uno" id="" required>
                                <option value="" disabled selected> <?php echo $respuesta['empresas_10.6.1'] ?></option>
                          </select>
                          <input type="text" disabled value=" <?php echo $respuesta['empresas_10.6.2'] ?>" >
                      </article>
                      <hr>
                      <p class="pregunta">10.7 ¿Tiene identificado los riesgos tecnológicos de mercado y financieros de la innovación?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_siete_uno" id="" required>
                                <option value="" disabled selected> <?php echo $respuesta['empresas_10.7.1'] ?></option>
                          </select>
                          <input type="text" disabled value=" <?php echo $respuesta['empresas_10.7.2'] ?>" >
                      </article>
                      <hr>
                      <p class="pregunta">10.8 ¿El prototipo a escala real cumple con las normas y/o previsiones legales o de medio ambiente del sector?</p>
                      <article class="contenidoModelo1">
                          <select name="diez_ocho_uno" id="" required>
                                <option value="" disabled selected> <?php echo $respuesta['empresas_10.8.1'] ?></option>
                          </select>
                          <input type="text" disabled value=" <?php echo $respuesta['empresas_10.8.2'] ?>" >
                      </article>
                      <hr>
                      <p class="pregunta">10.9 ¿Cuenta con una organización operativa y estructura organizacional acorde a las necesidades de operación de la producción de la innovación? (mercadotecnia, logística, producción y otros)</p>
                      <article class="contenidoModelo1">
                          <select name="diez_nueve_uno" id="" required>
                                <option value="" disabled selected> <?php echo $respuesta['empresas_10.9.1'] ?></option>
                          </select>
                          <input type="text" disabled value=" <?php echo $respuesta['empresas_10.9.2'] ?>" >
                      </article>
                      
                </section>

                <section class="seccion">
                      <article class="encabezado">
                        <hr id="separador-seccion">
                          <p id="seccion">11. Cuales han sido las principales dificultades identificadas en el momento de desarrollar procesos de innovación dentro de la organización? (selección multiple)</p>
                      </article>
                      <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.1 Conocimientos y habilidades del equipo de trabajo</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_11.1'] == 1) { ?>
                              checked <?php } ?>>  
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.2 Acceso a fuentes de financiación para desarrollo de procesos de innovación</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_11.2'] == 1) { ?>
                              checked <?php } ?>>   
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.3 Falta de compromiso de línea estratégica de la organización</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_11.3'] == 1) { ?>
                              checked <?php } ?>>   
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.4 Dedicación en tiempo específico para desarrollo de procesos de innovación</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_11.4'] == 1) { ?>
                              checked <?php } ?>>    
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">11.5 Falta de un equipo de trabajo destinado a procesos de innovación</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_11.5'] == 1) { ?>
                              checked <?php } ?>>   
                    </article>
                </section>
 
                <section class="seccion">
                      <article class="encabezado">
                        <hr id="separador-seccion">
                          <p id="seccion">12. Que acciones de acompañamiento le gustaría obtener del programa #InnovaETAntioquia (selección múltiple)</p>
                      </article>
                      <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.1 Estructuración del proyecto de innovación</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_12.1'] == 1) { ?>
                              checked <?php } ?>>   
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.2 Acercamiento con potenciales fuentes de financiación</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_12.2'] == 1) { ?>
                              checked <?php } ?>>    
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.3 Acercamiento con Hub de Innovación</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_12.3'] == 1) { ?>
                              checked <?php } ?>>   
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.4 Acercamiento con Tecnoparque SENA</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_12.4'] == 1) { ?>
                              checked <?php } ?>>    
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.5 Acercamiento Grupos de Investigación</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_12.5'] == 1) { ?>
                              checked <?php } ?>>    
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.6 Acercamiento Laboratorio Huawei del SENA</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_12.6'] == 1) { ?>
                              checked <?php } ?>>    
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.7 Formación en procesos de I+D+i para fortalecimiento del conocimiento dentro de la organización</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_12.7'] == 1) { ?>
                              checked <?php } ?>>   
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.8 Servicios Tecnológicos</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_12.8'] == 1) { ?>
                              checked <?php } ?>>   
                    </article>
                    <hr>
                    <article class="seleccionMultiple">
                          <p class="preguntaModelo2">12.9 Servicios de laboratorio (Centros de Formación)</p>
                          <input disabled type="checkbox" <?php if ($respuesta['empresas_12.9'] == 1) { ?>
                              checked <?php } ?>>   
                    </article> 
                </section> 
                <hr id="separador-seccion">
                
            </form>
        </section>
    </main>
    <footer>
        <?php include_once 'footer.php'; ?>
    </footer>
  

</html>

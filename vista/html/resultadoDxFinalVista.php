<!-- Se requiere el archivo controlador -->
<?php
    require_once('../../controlador/resultadoDxFinalControlador.php'); 
    session_start(); 

    if (!isset($_SESSION['Admin']) && !isset($_SESSION['Extensionista']) ) {
    header('Location: inicio.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/iconos/SENA-logo.svg">
    <title>Piloto Diagnostico Sena</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <head>
    <?php include_once 'header.php' ?>
    </head>
    <main id="area-pdf">
        
        <section id="seccion1">
                <article id="contenedor-logo-dxIni">
                    <img src="../../assets/iconos/SENA-logo-naranja.svg" alt="">
                </article>
                <h3 id="titulo-dxIni">Resultado diagnóstico final - Extensionismo Tecnológico - #Mipymesetransforma 
                                    Centro de Servicios y Gestión Empresarial Regional Antioquia - SENA</h3> 
                <article id="datosEmpresa-dxIni">
                            <p><b>Empresa: </b><?php echo $nombreEmpresa ?></p>
                            <p><b>Fecha del diagnóstico: </b><?php echo $fechaDx ?></p>
                            <p><b>Nit: </b><?php echo $nit ?></p>
                </article>
        </section>
        <hr id="hrSecciones">
        <section id=seccion2>
                <table id="tabla-resultadosDxIni">
                        <tr> <td class="tabla-resultados-item"><b>Estrategia:</b></td><td class="tabla-resultados-itemValor" id="estrategia"><?php echo $estrategia?></td> </tr>    
                        <tr> <td class="tabla-resultados-item"><b>Gestión:</b></td><td class="tabla-resultados-itemValor" id="gestion"><?php echo $gestion?></td> </tr>
                        <tr> <td class="tabla-resultados-item"><b>Equipo de trabajo:</b></td><td class="tabla-resultados-itemValor" id="equipo"><?php echo $equipo?></td> </tr>
                        <tr> <td class="tabla-resultados-item"><b>Potencial de crecimiento:</b></td><td class="tabla-resultados-itemValor" id="potencialCrecimiento"><?php echo $potencialCrecimiento?></td> </tr>
                        <tr> <td class="tabla-resultados-item"><b>Promedio:</b></td><td class="tabla-resultados-itemValor"><?php echo $promedioMedidores?></td> </tr>
                        <tr> <td class="tabla-resultados-item"><b>Perfil:</b></td><td class="tabla-resultados-itemValor"><?php echo $perfil?></td> </tr>
                        <tr hidden><td>bmv</td><td id="bmv"><?php echo $bmv ?></td></tr>
                        <tr hidden><td>bmp</td><td id="bmp"><?php echo $bmp ?></td></tr>
                        <tr hidden><td>bmt</td><td id="bmt"><?php echo $bmt ?></td></tr>
                        <tr hidden><td>bmux</td><td id="bmux"><?php echo $bmux ?></td></tr>
                        <tr hidden><td>bmps</td><td id="bmps"><?php echo $bmps ?></td></tr>
                </table>
                <article id="grafico-resultadoDxIni">
                        <canvas id="myChartDxiIniResultado" style="width:100%;"></canvas>
                </article>
        </section>
        <br>
        <?php if ($perfil == "Principiante") { ?>
            <b>Perfil Principiante: </b>Es una organización con procesos muy básicos en innovación, no poseen una estructura básica del componente y destinan recursos mínimos para el desarrollo de iniciativas innovadoras, aunque algunos colaboradores realizan procesos de innovación, no se identifica un liderazgo representativo en la formulación y ejecución.
        <?php }elseif ($perfil == "GEstor") { ?>
            <b>Perfil Gestor: </b>Es una organización con algunos procesos básicos en innovación, aunque no tienen una estructura definida en el área se reconoce algún liderazgo en el proceso. Realiza procesos de seguimiento básico a iniciativas innovadoras y destinan el presupuesto justo de acuerdo a necesidades específicas.
        <?php }elseif ($perfil == "Ejecutivo") { ?>
            <b>Perfil Ejecutivo: </b>Es una organización con estructura básica funcional para procesos de innovación y cuenta con líderes comprometidos en el desarrollo de iniciativas innovadoras, poseen presupuesto adecuado para el proceso y cuentan con un equipo de trabajo idóneo para la formulación y desarrollo.
        <?php }elseif ($perfil == "Transformador") { ?>
            <b>Perfil Transformador: </b>Es una organización con visión estratégica de la innovación, poseen un área realmente optima dentro de la estructura organizacional y destinan presupuestos suficientes y acordes para la formulación y ejecución de iniciativas innovadoras.
        <?php } ?>
        <hr id="hrSecciones">
        <h3 id="subtitulo-rutaInnovacion">Ruta de innovación</h3>
        <section id="seccion3">
                <table id="tabla-rutaInnovacionDxIni">
                <tr><td class="rutaInnovacionItem">Innovación oferta de valor BMV: <b><?php echo $rutaI_1 ?></b></td></tr>
                        <tr><td class="rutaInnovacionItem"> Innovación mejora de producto BMP: <b><?php echo $rutaI_2 ?></b></td></tr>
                        <tr><td class="rutaInnovacionItem">Innovación tecnología de mercado BMT: <b><?php echo $rutaI_3 ?></b></td></tr>
                        <tr><td class="rutaInnovacionItem">Innovación en experiencia de usuario BMUx: <b><?php echo $rutaI_4 ?></b></td></tr>
                        <tr><td class="rutaInnovacionItem">Innovación mejora de proceso BMPs: <b><?php echo $rutaI_5 ?></b></td></tr>
                </table>
                <article id="grafico-rutaInnovacion">
                        <canvas id="myChartDxIniRutaInnovacion" style="width:100%;"></canvas>      
                </article>
                
        </section>
        <hr id="hrSecciones">
        <section id="seccion4">
            <h3 id="subtitulo-recomendaciones">Recomendaciones</h3>
            <p><b>Estrategia:</b></p><br>
                        <?php if ($estrategia < 2) { ?>
                            <p class="recomendacion-parrafo">
                                1. La empresa debe construir una política clara de innovación que evidencie el compromiso organizacional para gestionar la 
                                innovación como componente fundamental de su estrategia.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. La empresa debe contemplar dentro de su estructura organizacional un área o responsables directos de innovación acorde con 
                                la misión y visión estratégica.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. Se deben establecer unos indicadores básicos en procesos de innovación para  poder realizar seguimiento a la 
                                gestión de iniciativas innovadoras generadas dentro y fuera de la organización.
                            </p>
                        <?php }elseif ($estrategia >= 2 && $estrategia <= 4) { ?>
                            <p class="recomendacion-parrafo">
                                1. Se recomienda que los líderes de la organización generen actividades para que la política de innovación 
                                sea interiorizada en su totalidad y a su vez generar esquemas para evidenciar y medir su aplicación en el corto y mediano plazo.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. Se identifica de forma indirecta un área de innovación pero es importante definir esta área de forma mas clara dentro de la 
                                estructura organizacional Deben formalizarse los responsables, canales y medios para que todas las personas de la organización 
                                sepan cómo se gestiona la innovación a quién y cómo recurrir ante una iniciativa innovadora.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. Se hace seguimiento de forma indirecta a iniciativas de innovación pero no aún con una metodología clara de medición. Es necesario 
                                implementar y hacer seguimiento periódico a indicadores que permitan establecer la apropiación de la estrategia de innovación y 
                                la gestión de las ideas innovadoras.
                            </p>
                        <?php }else { ?>
                            <p class="recomendacion-parrafo">
                                1. Desde la dirección se debe evidenciar el interés por mantener y mejorar cada vez más en la estrategia de innovación con medidas 
                                tendientes a estimular que todos los colaboradores vivencien la estrategia y cultura de innovación. Se debe hacer seguimiento y 
                                mejoramiento a los esquemas para la identificación y gestión de oportunidades e iniciativas de innovación.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. Se debe contemplar acciones estratégicas para que sea fortalecida a traves de procesos en la toma de decisiones y tenidas en 
                                cuenta en la misión y visión empresarial. Los responsables de la implementación y mantenimiento de la estrategia de innovación 
                                generarán los esquemas (procesos, incentivos, canales, gestión de presupuesto,  entre otros) necesarios para que la innovación 
                                se incorpore en  la cultura organizacional y se haga continuo aprovechamiento de las iniciativas innovadoras.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. La empresa posee una acción clara en cuanto a indicadores de innovación (seguimiento a iniciativas) en este caso se recomienda 
                                continuar con procesos de seguimiento que esten alineadas con metas institucionales y que garanticen el mantenimiento y mejoramiento 
                                de la estrategia de innovación y su sostenibilidad en el tiempo.
                            </p>
                        <?php } ?>
                    </article>
                    <article id="gestion-recomendacion">
                        <br>
                        <p><b>Gestión:</b></p><br>
                        <?php if ($gestion < 2) { ?>
                            <p class="recomendacion-parrafo">
                                1. Se recomienda tener una asignación presupuestal básica que involucre tiempo y dinero para iniciar la implementación del esquema de 
                                innovación en la organización.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. Los espacios fisicos y virtuales para procesos de innovación no son los adecuados, se debe promover acciones que permitan que 
                                los colaboradores y equipo de trabajo cuenten con los espacios requeridos, para ello es importante que esté definido dentro de 
                                la politica de innovación.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. Es necesario definir una estructura básica apropiando un sistema de información y un plan para de implementación para  la 
                                estrategia de innovación.
                            </p>
                        <?php }elseif ($gestion >= 2 && $gestion <= 4) { ?>
                            <p class="recomendacion-parrafo">
                                1. Se sugiere dentro de la construcción de la política de innovación establecer presupuestos que se ajusten a las necesidades actuales 
                                y que le permita optimizar acciones encaminadas al desarrollo y seguimiento de iniciativas.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. La empresa cuenta con espacios básicos para el desarrollo de procesos de innovación, sin embargo, se deben generar estrategias creativas 
                                para facilitar el acceso a espacios que movilicen el proceso innovador; buscar alianzas con instituciones, generar espacios virtuales 
                                deliberados y así  permitir el desarrollo de acciones que conlleven al mejoramiento continuo del área de innovación.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. Es recomendable asignar de manera formal tiempo, recursos, procesos y responsables para los diferentes procesos  involucrados en la 
                                estrategias de innovación entre ellos: definición, divulgación de la estrategia y gestión de iniciativas
                            </p>
                        <?php }else { ?>
                            <p class="recomendacion-parrafo">
                                1. Se tiene identificado dentro de la política de innovación, la destinación de recursos óptimos para procesos de innovación, es necesario 
                                que esta política sea actualizada constamente para el mejoramiento continuo.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. Los espacios para procesos de innovación son adecuados de acuerdo a una política clara, es necesario fortalecerlos  buscando alianzas 
                                con instituciones especializadas para la aceleración de iniciativas innovadoras.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. Se recomienda periódicamente hacer revisiones a la estrategia de innovación para su mejoramiento y sostenibilidad en el tiempo, 
                                involucrando la revisión de los procesos organizacionales para mantenerlos flexibles y propicios para la innnovación.
                            </p>
                        <?php } ?>
                    </article>
                    <article>
                        <br>
                        <p><b>Equipo:</b></p><br>
                        <?php if ($equipo < 2) { ?>
                            <p class="recomendacion-parrafo">
                                1. Se recomienda tener claramente identificado un responsable de implementar la estrategia de innovación apoyado por la alta 
                                dirección con tiempo y recursos básicos para el inicio de la estrategia,incorporando gradualmente otras personas de la organización 
                                cuando se requiera. 
                            </p>
                            <p class="recomendacion-parrafo">
                                2. La empresa debe fortalecer la gestión del conocimiento y competencias en el equipo de implementación de la estrategia de 
                                innovación (línea directiva), se hace necesario establecer un plan de formación que permita desarrollar habilidades para la 
                                apropiación de la estrategia de innovación.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. La empresa debe promover el interés y el conocimiento por los procesos de innovación entre todos su colaboradores cuyo fin 
                                sea el reconocimiento y apropiación de una potencial estrategia de innovación alineadas con la misión y visión empresarial.
                            </p>
                        <?php }elseif ($equipo >= 2 && $equipo <= 4) { ?>
                            <p class="recomendacion-parrafo">
                                1. Se recomienda tener un equipo de personas involucradas en la definición, implementación y gestión de la innovación, puede 
                                ser de dedicación exclusiva a esta tarea o con tiempos asignados suficientes dentro de sus otras responsabilidades. Se sugieren 
                                implementar espacios para compartir aprendizajes, estrategias e incentivar la creatividad e innovación.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. La empresa debe fortalecer la gestión del conocimiento y competencias en el equipo de implementación de la estrategia de 
                                innovación (equipo de colaboradores), se hace necesario establecer un plan de formación que permita desarrollar habilidades para 
                                la apropiación de la estrategia de innovación.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. Es necesario que la organización cree mecanismos para incentivar dentro de los colaboradores el interés por el desarrollo de 
                                iniciativas innovadorasque esten alineadas con la visión y misión de la empresa.
                            </p>
                        <?php }else { ?>
                            <p class="recomendacion-parrafo">
                                1. Se recomienda mantener y mejorar programas para fortalecer las competencias de innovación en todos los colaboradores de la 
                                organización, su compromiso con la estrategia y el interés por vivenciar la innovación desde su rol en la actividad diaria.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. Definir acciones para el mantenimiento y mejoramiento del proceso de generacion de conocimiento y competencias en toda la 
                                organización en torno a la estrategia de innovación
                            </p>
                            <p class="recomendacion-parrafo">
                                3. Generar mecanismos para el mantenimieno y mejoramiento del pensamiento innovador dentro de la organización, ajustado a una 
                                política de innovación clara y alineada con la misión y visión empresarial.
                            </p>
                        <?php } ?>
                    </article>
                    <article id="pcPageBreak">
                        <br>
                        <p><b>Potencial de crecimiento:</b></p><br>
                        <?php if ($potencialCrecimiento < 2) { ?>
                            <p class="recomendacion-parrafo">
                                1. Se hace necesario establecer una estructura básica, donde el 
                                presupuesto y equipo colaborador sean adecuados para el inicio de la implementación de una estrategia de innovación.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. Actualmente la empresa presenta limitantes en cuanto a competencias de innovación dentro del equipo de trabajo, en 
                                este aspecto es importante la generación de una cultura de innovación a tráves de la formación continua de colaboradores.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. La empresa actualmente presenta restricciones en flujo de caja para apoyar de forma eficiente procesos de innovación, 
                                lo que hace necesario buscar acercamientos y/o a alianzas con entidades públicas o privadas especializadas en procesos de 
                                innovación (programas, proyectos y fuentes de financiación) que apoyen a la organización en el desarrollo de iniciativas innovadoras.
                            </p>
                        <?php }elseif ($potencialCrecimiento >= 2 && $potencialCrecimiento <= 4) { ?>
                            <p class="recomendacion-parrafo">
                                1. La empresa tiene un prespuesto y equipo colaborador básico para procesos de innovación, se sugiere mantener estas acciones realizando 
                                revisiones periódicas de necesidades específicas en proceso, garantizando la cobertura de implementación.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. Aunque se cuenta con procesos de generación de conocimiento en innovación dentro de la organización, es importante apropiar este 
                                conocimiento por cada uno de los colaboradores fomentando aún mas la cultura de la innovación a través de la formación continua 
                                con mecanismos que faciliten la aplicación de los aprendizajes adquiridos: esquema de registro de iniciativas, incentivos, campañas 
                                de generación de iniciativas en temas específicos, entre otros.
                            </p>
                            <p class="recomendacion-parrafo">
                                3. La empresa cuenta actualmente con un flujo de caja que le permite apoyar y desarrollar procesos de innovación, sin embargo, se 
                                debe buscar acercamientos y/o a alianzas con entidades públicas o privadas especializadas en procesos de innovación (programas, 
                                proyectos y fuentes de financiación) que apoyen a la organización en el desarrollo de iniciativas innovadoras.
                            </p>
                        <?php }else { ?>
                            <p class="recomendacion-parrafo">
                                1. Realizar un seguimiento constante a la política de innovación, donde presupuestos, equipo de trabajo y sistemas de información, 
                                se garanticen en forma adecuada para el mejoramiento continuo y crecimiento organizacional.
                            </p>
                            <p class="recomendacion-parrafo">
                                2. Se deben seguir desarrollando acciones para el  mantenimiento y mejoramiento de la cultura de innovación en toda la organización 
                                generando acciones para que sea sostenible en el tiempo.  
                            </p>
                            <p class="recomendacion-parrafo">
                                3. Se deben seguir desarrollando acciones encaminadas en la toma de decisiones donde el presupuesto asignado a procesos de innovación 
                                sea acorde a las necesidades de una política de innovación clara y en constante crecimiento y desarrollo. <br>
                                <br> Se debe fortalecer el trabajo conjunto con entidades públicas o privadas especializadas en procesos de innovación (programas, proyectos 
                                y fuentes de financiación) para la generación de nuevo conocimiento a través de procesos de innovación de alto impacto.
                            </p>
                        <?php } ?>
        </section>
        
    </main>
    
    <footer>
        <?php include_once 'footer.php' ?>
    </footer>
</body>
<script src="../js/graficoResultadoDxIni.js"></script>
<script src="../js/graficoDxIniRutaInnovacion.js"></script>
<script src="../js/pdf.js" async="async"></script>
</html>
<!-- Se requiere el archivo controlador -->
<?php
    require_once('../../controlador/comparatviaControlador.php'); 
    
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
                <h3 id="titulo-dxIni">Compmarativa diagnóstivos inicial vs final - Extensionismo Tecnológico - #Mipymesetransforma 
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
                            <tr>
                                <th>Item</th>
                                <th>Inicial</th>
                                <th>Final</th>
                            </tr> 
                            <tr><td class="tabla-comparativaItem">Estrategia:</td><td id="estrategia"><?php echo $estrategia?></td><td id="estrategiaDx2"><?php echo $dxFinal_estrategia ?></td></tr>
                            <tr><td class="tabla-comparativaItem">Gestión:</td><td id="gestion"><?php echo $gestion?></td><td id="gestionDx2"><?php echo $dxFinal_gestion ?></td></tr>  
                            <tr><td class="tabla-comparativaItem">Equipo de trabajo:</td><td id="equipo"><?php echo $equipo?></td><td id="equipoDx2"><?php echo $dxFinal_equipo ?></td></tr>
                            <tr><td class="tabla-comparativaItem">Potencial de crecimiento:</td><td id="potencialCrecimiento"><?php echo $potencialCrecimiento ?></td><td id="potencialCrecimientoDx2">
                            <?php echo $dxFinal_potencialCrecimiento ?></td></tr>
                             <tr><td class="tabla-comparativaItem">Promedio:</td><td id="promedio"><?php echo $promedioMedidores?></td><td id="promedioDx2"><?php echo $dxFinal_promedioMedidores ?></td></tr>
                            <tr><td class="tabla-comparativaItem" id="perfil">Perfil:</td><td><?php echo $perfil ?></td><td><?php echo $dxFinal_perfil ?></td></tr> 
                            <tr hidden><td>bmv</td><td id="bmv"><?php echo $bmv ?></td><td>bmv</td><td id="dxFinal_bmv"><?php echo $dxFinal_bmv ?></td></tr>
                            <tr hidden><td>bmp</td><td id="bmp"><?php echo $bmp ?></td><td>bmp</td><td id="dxFinal_bmp"><?php echo $dxFinal_bmp ?></td></tr>
                            <tr hidden><td>bmt</td><td id="bmt"><?php echo $bmt ?></td><td>bmt</td><td id="dxFinal_bmt"><?php echo $dxFinal_bmt ?></td></tr>
                            <tr hidden><td>bmux</td><td id="bmux"><?php echo $bmux ?></td><td>bmux</td><td id="dxFinal_bmux"><?php echo $dxFinal_bmux ?></td></tr>
                            <tr hidden><td>bmps</td><td id="bmps"><?php echo $bmps ?></td><td>bmps</td><td id="dxFinal_bmps"><?php echo $dxFinal_bmps ?></td></tr>
                </table>
                <article id="grafico-resultadoDxIni">
                        <canvas id="myChartComparativaResultado" style="width:100%;"></canvas>
                </article>
        </section>
        <hr id="hrSecciones">
        <h3 id="subtitulo-rutaInnovacion">Ruta de innovación</h3>
        <section id="seccion3">
                <table id="tabla-rutaInnovacionDxIni">
                        <tr><td class="rutaInnovacionItem">Innovación oferta de valor BMV (Business, Model Value).</td></tr>
                        <tr><td class="rutaInnovacionItem"> Innovación mejora de producto BMP (Business Model Product).</td></tr>
                        <tr><td class="rutaInnovacionItem">Innovación tecnología de mercado BMT (Business Model Technology).</td></tr>
                        <tr><td class="rutaInnovacionItem">Innovación en experiencia de usuario BMUx (Business Model Usuario experience).</td></tr>
                        <tr><td class="rutaInnovacionItem">Innovación mejora de proceso BMPs (Business Model Procces)</td></tr>
                </table>
                <article id="grafico-rutaInnovacion">
                        <canvas id="myChartComparativaRutaInnovacion" style="width:100%;"></canvas>      
                </article>
                
        </section>
        <hr id="hrSecciones">
        
    </main>
    
    <footer>
        <?php include_once 'footer.php' ?>
    </footer>
</body>
<script src="../js/barraResultados.js"></script>
<script src="../js/barraRutaInnovacion.js"></script>
<script src="../js/pdf.js" async="async"></script>
</html>
<?php require_once('../../controlador/listarEmpresasControlador.php');
        require_once('../../controlador/listarDx2Controlador.php');
 

if (!isset($_SESSION['Admin']) && !isset($_SESSION['Extensionista']) ) {
        header('Location: inicio.php');
       
}

?> 

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
            <?php include_once 'header.php' ?>
    </header>
    <main id="main-empresas">
            <section id="empresas-contenedor">
                   
                    <h3>Empresas con diagnóstico</h3>    
                    <article id="contenedor-tablas">
                              <table id="tabla-empresas">
                                      <tr>
                                                <!--<th class="idEmpresa">Id</th>-->
                                                <th style="width:50%">Nombre</th>
                                                <th style="width:20%" colspan="2" >Diagnóstico inicial</th>
                                                <th style="width:20%" colspan="2" >Diagnóstico final</th>
                                                <th style="width:10%"><=></th>
                                                
                                        </tr>
                                        <?php while ($resultados = $listar->fetch_object()) { ?>
                                                <tr>
                                                        <!--<td class="idEmpresa"><?php echo $resultados->id_empresas_dx_ini; ?></td>-->
                                                        <td class="nombre-empresa"><?php echo $resultados->empresas_dx_ini_nombre; ?></td>
                                                        <td><img src="../../assets/iconos/description_black_24dp.svg" alt="" onclick="verDocDxInicial('docDxInicial.php', '<?php echo $resultados->id_empresas_dx_ini; ?>')"></td>
                                                        <td><img src="../../assets/iconos/bar_chart_black_24dp.svg" alt="" onclick="resultado('resultadoDxIniVista.php', '<?php echo $resultados->id_empresas_dx_ini; ?>')"> </td>
                                                        <td>
                                                        <?php 
                                                                 foreach ($resultadosDx2 as $key => $value) {
                                                                        if ($value == $resultados->empresas_nit) { ?>
                                                                                <img src="../../assets/iconos/description_black_24dp.svg" alt="" onclick="verDocDxFinal('docDxFinal.php', '<?php echo $value; ?>')">
                                                                      <?php }} ?>
                                                        </td>
                                                        <td>
                                                                 <?php 
                                                                 foreach ($resultadosDx2 as $key => $value) {
                                                                        if ($value == $resultados->empresas_nit) { ?>
                                                                                <img src="../../assets/iconos/bar_chart_black_24dp.svg" alt="" onclick="resultado2('resultadoDxFinalVista.php', '<?php echo $value; ?>')">
                                                                      <?php }} ?>
                                                                      
                                                        </td> 
                                                        <td>
                                                        <?php 
                                                                 foreach ($resultadosDx2 as $key => $value) {
                                                                        if ($value == $resultados->empresas_nit) { ?>
                                                                                <img src="../../assets/iconos/compare_arrows_black_24dp.svg" alt="" onclick="resultadoComparativa('comparativaVista.php', '<?php echo $resultados->empresas_nit; ?>' )">
                                                                      <?php }} ?>
                                                        </td>
                                                                                                             
                                                </tr>
                                        <?php  } ?>  
                                        
                                </table>  
                </article>
                    
            </section>
    </main>
    <footer>
            <?php include_once 'footer.php'; ?>
    </footer>
</body>
<script src="../js/empresasVista.js"></script>
<script src="../js/verDocDxInicial.js"></script>
<script src="../js/verDocDxFinal.js"></script>
</html>
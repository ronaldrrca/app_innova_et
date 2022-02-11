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
    <main id="main-inicio">
           <section id="inicio-contenedor">
                 
                <h1>Extensionismo Tecnológico <br> SENA - Regional Antioquia</h1>
                <h2>Bienvenido a la App piloto para el diagnóstico de innovación.</h2>
                <h3>#Mipymesetransforma </h3>
                <form id="inicio-form" action="../../controlador/consultarNitControlador.php" method="POST">
                        <input id="nit" type="number" required name="nit" max="9999999999" placeholder="Ingrese el nit sin puntos ni guión" autofocus>
                        <article id="submit-inicio">
                                <input id="iniciar-diagnostico" type="submit" value="Iniciar diagnóstico">
                        </article>
                        
                </form>
            </section>
    </main>
    <footer>
            <?php include_once 'footer.php'; ?>
    </footer>
</body>
</html>
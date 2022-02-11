<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/iconos/SENA-logo.svg">
    <title>Piloto Diagnostico Sena</title>
</head>
<body id="body-login">
    <header>
        <?php include_once 'header.php'; ?>
    </header>
    <main id="main-login">
        <section id="login-contenedor">
            <h2>Login</h2>
            <form id="login-form" action="../../controlador/loginControlador.php" method="POST">
                <label for="cedula">Cédula</label>
                <input type="number" name="cedula" required autofocus>
                <label for="pass">Contraseña</label>
                <input type="password" name="contrasena" required>
                <article id="submit-login">
                    <input id="submit-button" type="submit" value="Ingresar">
                </article>
                
            </form>
        </section>
    </main>
    <footer>
    <?php include_once 'footer.php'; ?>
    </footer>
  
</body>
</html>
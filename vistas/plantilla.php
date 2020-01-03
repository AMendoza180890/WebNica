<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta content="description" name="description" />
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author" />
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no" />
    <!-- css para login.php-->
    <link rel="stylesheet" href="vistas/css/signin.css">
    <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="./assets/favicon.ico" rel="icon" />
    <link href="vistas/css/style.css" rel="stylesheet" />
    <script src="vistas/js/util.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Web-Nica</title>
</head>
<body>
    <header>
        <?php include 'vistas/modulos/navMenu.php'; ?>
    </header>
    <?php try {
        $rutas = new RutasControlador();
        $rutas->Rutas();
    } catch (exception $ex) {
        mensajes::error($ex);
    } ?>
    <footer>
        <?php include 'vistas/modulos/footer.php'; ?>
    </footer>
    <!--script DOMContentLoaded -> evento que determina cuando carga toda la pagina -->
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            /*navActivePage -> evento que permite ver y mantener el ultimo cambio de estado en el menu*/
            navActivePage();
        });
    </script>
    <script type="text/javascript" src="vistas/js/main.41beeca9.js"></script>
    <script src="vistas/js/smooth-scroll.polyfills.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>
</html>
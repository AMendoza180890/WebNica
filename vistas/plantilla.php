<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
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
    <!-- Add your content of header -->
    <header>
        <!--menu importado desde archivo navMenu.php-->
        <?php
        include 'vistas/modulos/navMenu.php';
        ?>
    </header>

    <?php
    try {
        $rutas = new RutasControlador();
        $rutas->Rutas();
    } catch (exception $ex) {
        mensajes::error($ex);
    }
    /* Aqui carga el contenido de la pagina desde las rutas en vistas/modulos/ y usuando cada pagina PHP*/
    ?>

    <footer>
        <?php
        /*Aqui carga el contenido de footer.php que es el footer o pie de pagina*/
        include 'vistas/modulos/footer.php';
        ?>
    </footer>
    <!--script DOMContentLoaded -> evento que determina cuando carga toda la pagina -->
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            /*navActivePage -> evento que permite ver y mantener el ultimo cambio de estado en el menu*/
            navActivePage();
        });
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->

    <script type="text/javascript" src="vistas/js/main.41beeca9.js"></script>
    <script src="vistas/js/smooth-scroll.polyfills.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>

</html>
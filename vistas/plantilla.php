<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159948149-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-159948149-1');
    </script>
    <!-- End google Analytics-->
    <!--Meta datos para facebook-->
    <meta property="og:url" content="https://www.web-nica.com/index.php?ruta=components" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Web-Nica.com" />
    <meta property="og:description" content="Extiende tu negocio por todo el mundo con web-nica" />
    <meta property="og:image" content="https://www.web-nica.com/admin/vistas/img/blog/B138.jpg" />
    <!--start metas to page website-->
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta content="description" name="description" />
    <meta name="google" content="notranslate" />
    <meta content="Website developed by Web-Nica" name="author" />
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no" />
    <!-- css para login.php-->
    <link rel="stylesheet" href="vistas/css/signin.css">
    <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="./assets/favicon.ico" rel="icon" />
    <link href="vistas/css/style.css" rel="stylesheet" />
    <script src="vistas/js/util.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vistas/css/superslides.css">
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
    <script src="vistas/js/jquery.js"></script>
    <script src="vistas/js/jquery.superslides.js"></script>
    <script type="text/javascript" src="vistas/js/main.41beeca9.js"></script>
    <script src="vistas/js/smooth-scroll.polyfills.js"></script>
    <!--Trabajo de acortar descripcion-->
    <script src="vistas/js/jquery.expander.js"></script>
    <!--arhvivo script personalizado -->
    <script src="vistas/js/blogExpand.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>

</html>
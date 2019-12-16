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

    <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="./assets/favicon.ico" rel="icon" />
    <link href="vistas/css/style.css" rel="stylesheet" />
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
    /* Aqui carga el contenido de la pagina desde las rutas en vistas/modulos/ y usuando cada pagina PHP*/
    $rutas = new RutasControlador();
    $rutas->Rutas();
    ?>

    <!--Aqui termina el enmaquetado que no se esta utilizando -->
    <footer>
        <div class="section-container footer-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>About us</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                            sit amet consectetur dolor
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h4>Do you like ? Share this !</h4>
                        <p>
                            <a href="https://facebook.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://twitter.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </p>
                        <p>
                            <small>© Untitled | Website created with
                                <a href="http://www.mashup-template.com/" class="link-like-text" title="Create website with free html template">Mashup Template</a>/<a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images">Unsplash</a></small>
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h4>Subscribe to newsletter</h4>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control footer-input-text" />
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary btn-newsletter ">
                                        OK
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
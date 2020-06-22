<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="google" content="notranslate" />
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no" />

    <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="./assets/favicon.ico" rel="icon" />
    <link href="./style.css" rel="stylesheet" />
</head>
<nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?ruta=index" title="">
                <img src="vistas/assets/images/ImgWebNica1-01.svg" class="navbar-logo-img imgLogo" alt="" />
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
            <ul class="nav navbar-nav navbar-right">
            <?php
                $pagina =  new RutasControlador();
                $pagLoad = $pagina->siteWebPageLoad();
                
                for ($i=0; $i < count($pagLoad) ; $i++) { 
                    echo '<li><a href="'.$pagLoad[$i]->CatPagNombre.'" title="" class="active">'.$pagLoad[$i]->CatPagEtiqueta.'</a></li>';
                }?>
                <li>
                    <p>
                        <a href="./download.html" class="btn btn-primary navbar-btn enable" title="">Download</a>
                    </p>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>W</b>N</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>WEB</b>-NICA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php
                            if ($_SESSION["CatUsuFoto"]=="") {
                                echo '<img src="vistas/img/usuarios/defecto.png" class="user-image" alt="User Image">';
                            }else {
                                echo '<img src="'.$_SESSION['CatUsuFoto'].'" class="user-image" alt="User Image">';
                            }
                        ?>
                        <span class="hidden-xs"><?php  echo $_SESSION["CatUsuario"]; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="perfil" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                        <a href="salir" class="btn btn-danger btn-flat">Salir</a>
                    </div>
                </li>
            </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
           <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>-->
            </ul>
        </div>
    </nav>
</header>
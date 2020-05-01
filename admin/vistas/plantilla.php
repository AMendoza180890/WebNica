<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="vistas/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!--Estilo correctivos para algunos elementos del gestor de contenido-->
    <link rel="stylesheet" href="vistas/css/estilos.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="vistas/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="vistas/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini login-page">
    <?php
    if (isset($_SESSION["Ingreso"]) && $_SESSION["Ingreso"] == true) {
        echo '<div class="wrapper">';
        include 'vistas/modulos/header.php';
        include 'vistas/modulos/menu.php';
        if (isset($_GET["ruta"])) {
            if ($_GET["ruta"] == "inicio" || $_GET["ruta"] == "ingreso" || $_GET["ruta"] == "salir" || $_GET["ruta"] == "usuarios" || $_GET["ruta"] == "perfil" || $_GET["ruta"] == "slide" || $_GET["ruta"] == "nosotros" || $_GET["ruta"] == "mensajes" || $_GET["ruta"] == "Servicios") {
                include 'vistas/modulos/' . $_GET["ruta"] . '.php';
            }
        } else {
            include 'vistas/modulos/inicio.php';
        }
        echo '</div>';
    } else {
        include 'vistas/modulos/ingreso.php';
    } ?>
    <!-- jQuery 3 -->
    <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="vistas/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="vistas/bower_components/raphael/raphael.min.js"></script>
    <script src="vistas/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="vistas/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="vistas/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="vistas/bower_components/moment/min/moment.min.js"></script>
    <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="vistas/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Slimscroll -->
    <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="vistas/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="vistas/dist/js/demo.js"></script>
    <!--util para obtener informacion de usuarios-->
    <script src="vistas/js/usuarios.js"></script>
    <!--Se obtiene informacion de la base de datos y se carga en el formuario slide-->
    <script src="vistas/js/slides.js"></script>
    <!--modulo de servicios-->
    <script src="vistas/js/Servicios.js"></script>
    <!--modulo de mensajes-->
    <script src="vistas/js/mensajes.js"></script>
</body>

</html>
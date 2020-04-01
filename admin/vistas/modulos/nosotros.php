<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gestor de Nuestros Servicios
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-success">
            <div class="box-body">
                <?php
                $mostrarEncabezado = new servicioC();
                $mostrarEncabezado->MostrarEncServicioC();
                ?>
            </div>
            <div class="box-footer">
                <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#EditarNosotros"><i class="fa fa-pencil"></i>Editar</button>
            </div>
        </div>
    </section>
        <!--Seccion de servicios-->
        <?php include 'vistas/modulos/servicios.php';?>
</div>
<!--Ventana modal-->
<div id="EditarNosotros" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <?php
                $MostrarEncServicio = new ServicioC();
                $MostrarEncServicio->EditarEncServicioFrmC();
                ?>
            </form>
        </div>
    </div>
</div>
<?php
$EditarEncServicio = new servicioC();
$EditarEncServicio->EditarEncServicioC();
?>
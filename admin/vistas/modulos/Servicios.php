 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Gestor de Nuestros Servicios
         </h1>
     </section>
     <!-- Main content -->
     <section class="content">
         <!-- Default box -->
         <div class="box">
             <div class="box-header with-border">
                 <button class="btn btn-primary" data-toggle="modal" data-target="#CrearServicios">Crear Servicio</button>
             </div>
             <div class="box-body">
                 <table class="table table-bordered table-hover table-striped TB">
                     <thead>
                         <tr>
                             <th>N</th>
                             <th>icono</th>
                             <th>Titular</th>
                             <th>Descripcion</th>
                             <th>Editar / Eliminar</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $MostrarServicios = new CatServicioGralC();
                            $MostrarServicios->verServiciosC();

                            $valor = null;
                            CatServicioGralC::CargarServicioC($valor);
                            ?>
                     </tbody>
                 </table>
             </div>
             <!-- /.box-footer-->
         </div>
         <!-- /.box -->
     </section>
 </div>


 <!--Modal CRUD -->
 <!--Crear Servicios-->
 <div class="modal fade" role="dialog" id="CrearServicios">
     <div class="modal-dialog">
         <div class="modal-content">
             <form method="post" role="form" enctype="multipart/form-data">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                     <h3>Crear Servicios</h3>
                 </div>
                 <div class="modal-body">
                     <div class="box-body">

                         <div class="form-group">
                             <h2>Icono:</h2>
                             <input type="text" class="form-control input-lg" name="iconoN" require>
                         </div>

                         <div class="form-group">
                             <h2>Titular:</h2>
                             <input type="text" class="form-control input-lg" name="titularN" require>
                         </div>

                         <div class="form-group">
                             <h2>Descripcion:</h2>
                             <textarea cols="30" rows="10" name="descripcionN" require></textarea>
                         </div>

                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Crear</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                 </div>
                 <?php
                    $crearServ = new CatServicioGralC();
                    $crearServ->CrearServicioGralC();
                    ?>
             </form>
         </div>
     </div>
 </div>


 <!--Actualizar Servicios-->
 <div class="modal fade" role="dialog" id="EditarServicio">
     <div class="modal-dialog">
         <div class="modal-content">
             <form method="post" role="form" enctype="multipart/form-data">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                     <h3>Editar Servicio</h3>
                 </div>
                 <div class="modal-body">
                     <div class="box-body">
                         <div class="form-group">
                             <h2>Icono:</h2>
                             <input type="text" class="form-control input-lg" id="iconoE" name="iconoE">
                         </div>

                         <div class="form-group">
                             <h2>Titular:</h2>
                             <input type="text" class="form-control input-lg" id="titularE" name="titularE" require>
                             <input type="hidden" id="Servicioid" name="Servicioid">
                         </div>

                         <div class="form-group">
                             <h2>Descripcion:</h2>
                             <textarea id="descripcionE" name="descripcionE" cols="30" rows="10"></textarea>
                         </div>

                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Guardar</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                 </div>
                 <?php
                    $ActualiarCatServicio = new CatServicioGralC();
                    $ActualiarCatServicio->ActualizarCatServicioC();
                    ?>
             </form>
         </div>
     </div>
 </div>
 <?php
    $BorrarServicio = new CatServicioGralC();
    $BorrarServicio->CatServicioBorrarC();
    ?>
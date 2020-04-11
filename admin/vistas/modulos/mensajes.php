 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Gestor de Mensajes
         </h1>
     </section>

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="box">
             <div class="box-header with-border">

                 <button class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuarios">Crear</button>

                 <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                         <i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                         <i class="fa fa-times"></i></button>
                 </div>
             </div>
             <div class="box-body">
                 <table class="table table-bordered table-hover table-striped TB">
                     <thead>
                         <tr>
                             <th>N</th>
                             <th>Nombre</th>
                             <th>Email</th>
                             <th>Editar / Eliminar</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $vermensajes = new mensajesC();
                            $vermensajes->cargar_lista_mensajesC();

                            $id = null;
                            $obtenerMsg = mensajesC::mostrarMensajeC($id);
                            ?>
                     </tbody>
                 </table>
             </div>
             <!-- /.box-footer-->
         </div>
         <!-- /.box -->
     </section>
     <!-- /.content -->
 </div>

 <!--modulo enmaquetado del visor de correo electronico-->
 <div class="modal fade" role="dialog" id="mostarMensaje">
     <div class="modal-dialog">
         <div class="modal-content">
             <form method="post" role="form" enctype="multipart/form-data">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                     <h3>Visor de Mensaje</h3>
                 </div>
                 <div class="modal-body">
                     <div class="box-body">
                         <div class="form-group">
                             <h2>Nombre:</h2>
                             <input type="text" class="form-control input-lg" id="nombreE" name="nombreE" require>
                             <input type="hidden" id="idE" name="idE">
                         </div>
                         <div class="form-group">
                             <h2>Email:</h2>
                             <input type="text" class="form-control input-lg" id="emailE" name="emailE">
                         </div>
                         <div class="form-group">
                             <h2>Direccion:</h2>
                             <input type="text" class="form-control input-lg" id="direccionE" name="direccionE" require>
                         </div>
                         <div class="form-group">
                             <h2>Descripcion:</h2>
                             <textarea id="descripcionE" name="descripcionE" cols="30" rows="10"></textarea>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <!--<button type="submit" class="btn btn-primary">Guardar</button>-->
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                 </div>
                 <?php
                    /*
                    $actualizarS = new SlideC();
                    $actualizarS->ActualizarSlideC();
                    */
                ?>
             </form>
         </div>
     </div>
 </div>
 <?php
    $mensaje = new mensajesC();
    $mensaje->borrar_mensaje();
?>
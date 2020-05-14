 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Gestor de contenido multimedia
         </h1>
     </section>
     <!-- Main content -->
     <section class="content">
         <!-- Default box -->
         <div class="box">
             <div class="box-header with-border">
                 <button class="btn btn-primary" data-toggle="modal" data-target="#AgregarMultimedia">Agregar Nueva Imagen</button>
             </div>
             <div class="box-body">
                 <table class="table table-bordered table-hover table-striped TB">
                     <thead>
                         <tr>
                             <th>N</th>
                             <th>Descripcion</th>
                             <th>Ruta</th>
                             <th>Ruta Publica</th>
                             <th>Imagen de Muestra</th>
                             <th>Eliminar</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $mostrarCatMedia = new clsCatMediaC();
                            $mostrarCatMedia->verCatMedia();
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
 <div class="modal fade" role="dialog" id="AgregarMultimedia">
     <div class="modal-dialog">
         <div class="modal-content">
             <form method="post" role="form" enctype="multipart/form-data">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                     <h3>Agregar Nueva Imagen Multimedia</h3>
                 </div>
                 <div class="modal-body">
                     <div class="box-body">

                         <div class="form-group">
                             <h2>Descripcion:</h2>
                             <textarea cols="30" rows="10" name="descripcionN" id="descripcionN"></textarea>
                         </div>

                         <div class="from-group">
                             <h2>Imagen:</h2>
                             <input type="file" name="inImgCatMediaN" id="inImgCatMediaN" require>
                             <p class="help-block">tamaño máximo del archivo 200 Mb</p>
                         </div>

                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Crear</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                 </div>
                 <?php
                    $crearcatMediaC = new clsCatMediaC();
                    $crearcatMediaC->ingresarNuevaCatMediaC();
                    ?>
             </form>
         </div>
     </div>
 </div>

 <?php
 
    $BorrarCatMedia = new clsCatMediaC();
    $BorrarCatMedia->eliminarCatMediaC();

?>
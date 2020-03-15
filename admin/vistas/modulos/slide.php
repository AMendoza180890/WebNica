 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Gestor de Sliders
         </h1>
     </section>
     <!-- Main content -->
     <section class="content">
         <!-- Default box -->
         <div class="box">
             <div class="box-header with-border">
                 <button class="btn btn-primary" data-toggle="modal" data-target="#CrearSlider">Crear Imagen</button>
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
                             <th>Imagen</th>
                             <th>Titular</th>
                             <th>Descripcion</th>
                             <th>Orden</th>
                             <th>Editar / Eliminar</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>1</td>
                             <td><img src="vistas/img/usuarios/default.png" class="img-thumbnail" width="300px" alt=""></td>
                             <td>Titulo de la publicacion</td>
                             <td>Descripcion de la publicacion en pagina web</td>
                             <td>1</td>
                             <td>
                                 <div class="btn-group">
                                     <button class="btn btn-success" data-toggle="modal" data-target="#EditarS"><i class="fa fa-pencil"></i></button>
                                     <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                 </div>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>
             <!-- /.box-footer-->
         </div>
         <!-- /.box -->
     </section>
     <!-- /.content -->
 </div>
 <?php include 'vistas/modulos/RegSlider.php'; ?>
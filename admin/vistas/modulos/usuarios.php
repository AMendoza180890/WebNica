 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Gestor de usuarios
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
                             <th>Contraseña</th>
                             <th>Foto</th>
                             <th>Rol</th>
                             <th>Editar / Eliminar</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $verU = new UsersList();
                            $verU->verUsuarioC();

                            $item = null;
                            $valor = null;

                            $UdtUser = UpdateUserC::UpdateInfoUserC($item,$valor);
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
 <?php include 'vistas/modulos/RegUsuarios.php'; ?>
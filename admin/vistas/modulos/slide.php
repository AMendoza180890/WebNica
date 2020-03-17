 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
<<<<<<< HEAD
             Gestor de usuarios
         </h1>
     </section>

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="box">
             <div class="box-header with-border">

                 <button class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuarios">Crear</button>

=======
             Gestor de Sliders
         </h1>
     </section>
     <!-- Main content -->
     <section class="content">
         <!-- Default box -->
         <div class="box">
             <div class="box-header with-border">
                 <button class="btn btn-primary" data-toggle="modal" data-target="#CrearSlider">Crear Imagen</button>
>>>>>>> a681ad489f4011fdf3d3e3e39d8e795164ee31b8
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
<<<<<<< HEAD
                             <th>Nombre</th>
                             <th>Contraseña</th>
                             <th>Foto</th>
                             <th>Rol</th>
=======
                             <th>Imagen</th>
                             <th>Titular</th>
                             <th>Descripcion</th>
                             <th>Orden</th>
>>>>>>> a681ad489f4011fdf3d3e3e39d8e795164ee31b8
                             <th>Editar / Eliminar</th>
                         </tr>
                     </thead>
                     <tbody>
<<<<<<< HEAD
                         <?php
                            $verU = new UsersList();
                            $verU->verUsuarioC();

                            $item = null;
                            $valor = null;

                            $UdtUser = UpdateUserC::UpdateInfoUserC($item, $valor);
                            ?>
=======
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
>>>>>>> a681ad489f4011fdf3d3e3e39d8e795164ee31b8
                     </tbody>
                 </table>
             </div>
             <!-- /.box-footer-->
         </div>
         <!-- /.box -->
     </section>
     <!-- /.content -->
 </div>
<<<<<<< HEAD
 <?php include 'vistas/modulos/RegUsuarios.php'; ?>
=======
 <?php include 'vistas/modulos/RegSlider.php'; ?>
>>>>>>> a681ad489f4011fdf3d3e3e39d8e795164ee31b8

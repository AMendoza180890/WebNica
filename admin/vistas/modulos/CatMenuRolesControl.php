 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Gestor de Menu
         </h1>
     </section>

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="box">
             <div class="box-header with-border">

                 <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuarios">Crear</button> -->
                 <form name="frmRoles" method="POST">
                     <select name="Roles" id="Roles">
                         <?php
                            $cargarListaRoles = new rolesMenuC();
                            $cargarListaRoles->cargarRolesC();
                            ?>
                     </select>
                 </form>

                 <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                         <i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                         <i class="fa fa-times"></i></button>
                 </div>
             </div>
             <div class="box-body" id="tablaMenu">
                     <?php
                        rolesMenuC::catRolesMenuMostrarListaC($_SESSION['CatRol']);
                    ?>
             </div>
             <!-- /.box-footer-->
         </div>
         <!-- /.box -->
     </section>
     <!-- /.content -->
 </div>
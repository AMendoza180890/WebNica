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
                <h1>Banner:</h1>
                <img src="vistas/img/usuarios/default.png" alt="imagen de banner" width="250px">
                <hr>
                <h2>Descripcion:</h2>
                <h4>
                    Actualmente las personas pasan gran parte de su tiempo conectados a internet, ante esta singularidad del mundo en el que vivimos, las pymes, los restaurantes, los negocios de ropa, las marcas deportivas están obligadas a trasladarse a la web y aprovechar las ventajas que ofrecen los espacios en internet. Existen muchas formas de aprovechar la web, eso depende de tu público meta y el tipo de negocio.
                    Nuestros servicios se adecúan a tus objetivos y expectativas de tu empresa.
                </h4>
            </div>
            <div class="box-footer">
                <button class="btn btn-success btn-lg" data-toogle="modal" data-target="#EditarNosotros"><i class="fa fa-pencil"></i>Editar</button>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


<div id="EditarNosotros" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <h2>Imagen Banner:</h2>
                            <input type="file" name="imagenE" required>
                        </div>

                        <div class="form-group">
                            <h2>Descripcion</h2>
                            <input type="text" name="descripcionE" required>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
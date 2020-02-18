    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>WEB</b>-NICA</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Ingreso al gestor de contenido</p>

            <form method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="user" name="usuario-ing">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="password" name="clave-Ing">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div>
                    <!-- /.col -->
                </div>

                <?php
                    $ingreso = new usuarioC();
                    $mensaje = $ingreso -> ingresoUsuarioC();
                    echo $mensaje;
                ?>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
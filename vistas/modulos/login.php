<div class="section-containerAll border-section-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-container-spacer">
                <h2 class="form-signin-heading text-center">Bienvenido a Web-Nica</h2>
                <form class="form-signin" method="POST">
                    <label for="inputEmail" class="sr-only">Usuario</label>
                    <input type="text" id="inputEmail" class="form-control" name="user" placeholder="Usuario" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="passw" placeholder="Password" required>
                    <div class="checkbox">
                        <label class="enable">
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
$ingreso = new AdminC();
$ingreso->IngresoC();
?>
<header>
    <link rel="stylesheet" href="vistas/css/signin.css">
</header>
<div class="container">
    <h2 class="form-signin-heading text-center">Bienvenido Web-Nica</h2>
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

<?php
$ingreso = new AdminC();
$ingreso -> IngresoC();
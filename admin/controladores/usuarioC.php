<?php
    class usuarioC{
        public function ingresoUsuarioC(){
            try {
                if (isset($_POST['usuario-ing'])) {
                    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['usuario-ing']) && preg_match('/^[a-zA-Z0-9]+$/', $_POST['clave-Ing'])){
                        $datosC = array('usuario'=> $_POST['usuario-ing'], 'clave'=> $_POST['clave-Ing']);
                        $tablaBD = 'catusuario';
                        $usu = new UsuariosM();
                        $respuesta = $usu->IngresoUsuarioM($datosC,$tablaBD);
                        if ($respuesta['CatUsuario'] == $_POST['usuario-ing'] && $respuesta['CatPass'] == $_POST['clave-Ing']) {
                                echo '<script>windows.location="index";</script>';
                        }else {
                            echo 'ERROR AL INGRESAR';
                        }
                    }
                }
            } catch (Exception $ex) {
                mensajes::error($ex);
            }

        }
    }
?>
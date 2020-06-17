<?php
    class usuarioC{
        public function ingresoUsuarioC(){
            try {
                if (isset($_POST['usuario-ing'])) {
                    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['usuario-ing']) && preg_match('/^[a-zA-Z0-9]+$/', $_POST['clave-Ing'])){
                        $datosC = array('CatUsuario'=> $_POST['usuario-ing'], 'CatPass'=> $_POST['clave-Ing']);
                        $usu = new UsuariosM();
                        $respuesta = $usu->IngresoUsuarioM($datosC);
                        if ($respuesta['CatUsuario'] == $_POST['usuario-ing'] && $respuesta['CatPass'] == $_POST['clave-Ing']) {
                            $_SESSION["Ingreso"] = true;
                            $_SESSION["CatUsuId"] = $respuesta["CatUsuId"];
                            $_SESSION["CatUsuario"] = $respuesta["CatUsuario"];
                            $_SESSION["CatPass"] = $respuesta["CatPass"];
                            $_SESSION["CatUsuFoto"] = $respuesta["CatUsuFoto"];
                            $_SESSION["CatRol"] = $respuesta["CatRol"];

                            echo '<script> 
                                    window.location = "index.php?url=inicio";
                                </script>';
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
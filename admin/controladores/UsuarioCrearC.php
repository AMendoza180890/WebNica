<?php
    class UsuarioCrearC{
        public function CreateUsers(){
            try {
                if (isset($_POST["usuarioN"])) {
                    $rutaImg = "";
                    if (isset($_FILES["fotoN"]["tmp_name"]) && !empty($_FILES["fotoN"]["tmp_name"])) {
                        if ($_FILES["fotoN"]["type"] == "image/jpeg")  {
                            $nombre = mt_rand(10,999);
                            $rutaImg = 'vistas/img/usuarios/U'.$nombre.".jpg";
                            $foto = imagecreatefromjpeg($_FILES["fotoN"]["tmp_name"]);
                            imagejpeg($foto, $rutaImg);
                        }
                        if ($_FILES["fotoN"]["type"] == "image/png") {
                            $nombre = mt_rand(10, 999);
                            $rutaImg = 'vistas/img/usuarios/U'.$nombre.".png";
                            $foto = imagecreatefrompng($_FILES["fotoN"]["tmp_name"]);
                            imagepng($foto, $rutaImg);
                        }
                    }
                    $tablabd="catusuario";    
                    $datosC = array("CatEmpId"=>$_POST["empN"], "CatUsuario"=>$_POST["usuarioN"], "CatPass"=>$_POST["claveN"], "CatRol"=>$_POST["rolN"], "CatUsuFoto"=>$rutaImg);
                    $respuesta = UsuarioCrearM::CrearUsuarioM($tablabd,$datosC);
                    if ($respuesta == true) {
                        echo '<script>
                                window.location = "usuarios";
                                </script>';
                    }else {
                        echo 'Error al crear contacto';
                    }
                }
            } catch (exception $ex) {
                mensajes::error($ex);
            }
        }
    }
?>
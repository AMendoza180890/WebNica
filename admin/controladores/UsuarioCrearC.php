<?php
    class UsuarioCrearC{
        public function CreateUsers(){
            if (isset($_POST["usuarioN"])) {
                $rutaImg = "";
                if (isset($_FILES["fotoN"]["tmp_name"]) && !empty($_FILES["fotoN"]["tmp_name"])) {
                    if ($_FILES["fotoN"]["tmp_name"] == "image/jpeg")  {
                        $nombre = mt_rand(10,999);
                        $rutaImg = 'vistas/img/usuarios/U'.$nombre.".jpg";
                        $foto = imagecreatefromjpeg($_FILES["fotoN"]["tmp_name"]);
                        imagejpeg($foto, $rutaImg);
                    }
                    if ($_FILES["fotoN"]["tmp_name"] == "image/png") {
                        $nombre = mt_rand(10, 999);
                        $rutaImg = 'vistas/img/usuarios/U' . $nombre . ".png";
                        $foto = imagecreatefromjpeg($_FILES["fotoN"]["tmp_name"]);
                        imagejpeg($foto, $rutaImg);
                    }
                }

                $tablabd="";

                $datosC = array("Empleado"=>$_POST["empN"],"usuario"=>$_POST["usuarioN"], "claveN"=>$_POST["claveN"], "rol"=>$_POST["rolN"], "foto"=>$rutaImg);

                $respuesta = UsuarioCrearM::CrearUsuarioM($tablabd,$datosC);
            }
        }
    }
?>
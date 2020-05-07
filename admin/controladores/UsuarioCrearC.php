<?php
    class UsuarioCrearC{
        public function CreateUsers(){
            try {
                if (isset($_POST["usuarioN"])) {
                    $rutaImg = "";
                    if (isset($_FILES["fotoN"]["tmp_name"]) && !empty($_FILES["fotoN"]["tmp_name"])) {
                        $rutaImg = EditImg::imgEditar("fotoN");
                    }
                    $tablabd="catusuario";    
                    $datosC = array("CatEmpId"=>$_POST["empN"], "CatUsuario"=>utf8_encode($_POST["usuarioN"]), "CatPass"=>$_POST["claveN"], "CatRol"=>$_POST["rolN"], "CatUsuFoto"=>$rutaImg);
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
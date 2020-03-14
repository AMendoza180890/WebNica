<?php
class UpdateUserC{
    public static function UpdateInfoUserC($item,$valor){
        try {
            $respuesta = ActualizarUserM::UpdateInfoUserM($item,$valor);
            return $respuesta;
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }

    public function UpdateUC(){
            if (isset($_POST["CatUsuId"])) {
                $rutaImg = $_POST["FotoActual"];
                if (isset($_FILES["fotoE"]["tmp_name"]) && !empty($_FILES["fotoE"]["tmp_name"])) {
                    if (!empty($_POST["FotoActual"])) {
                        unlink($_POST["FotoActual"]);
                    } else {
                        mkdir($direc, 0755);
                    }
                    if ($_FILES["fotoE"]) {
                        $rutaImg = EditImg::imgEditar("fotoE");
                    }
                }
                $datoC = array('CatUsuId' => $_POST["CatUsuId"], 'CatUsuario' => $_POST["usuarioE"], 'CatPass' => $_POST["claveE"], 'CatRol' => $_POST["rolE"], 'CatUsuFoto' => $rutaImg);
                $respuesta = ActualizarUserM::UpdateUM($datoC);
                if ($respuesta == true) {
                    echo '<script>window.location = "usuarios";</script>';
                } else {
                    echo 'Error al actualizar Informacion Usuario';
                } 
            }
        }
}
?>
<?php
    class BorrarUser{
        public function BorrarUserC(){
            try {
                if (isset($_GET["CatUsuId"])) {
                    $datosC = $_GET["CatUsuId"];
                
                        if ($_GET["CatUsuFoto"] != "") {
                            unlink($_GET["CatUsuFoto"]);
                        }
                        $respuesta = BorrarUserM::BorrarUsuarioM($datosC);
                        
                            if ($respuesta == true) {
                                echo '<script> window.location = "usuarios";</script>';
                            }else {
                                echo 'Error al borrar';
                            }
                }
        } catch (exception $ex) {
                mensajes::error($ex);
        }
    }
}
?>
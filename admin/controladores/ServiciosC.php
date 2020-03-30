<?php
class servicioC{
    public function MostrarEncServicioC(){
        try {
            $respuesta = servicioM::MostrarEncServiciosM();
            echo '<h1>Imagen Banner:</h1>';
                if ($respuesta["HOSImgBanner"] !== '') {
                    echo '<img src="'.$respuesta["HOSImgBanner"].'" alt="imagen de banner" width="250px">';
                }else{
                    echo '<img src="vistas/img/usuarios/default.png" alt="imagen de banner" width="250px">';
                }
            echo '<hr>
                <h2>Descripcion:</h2>
                <h4>'.$respuesta["HOSDescripcion"].'</h4>';
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
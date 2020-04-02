<?php
class CatServiciosViewControler{
    public static function CatServicioViewCont(){
        try {
            $respuesta = CatServiciosViewModel::CatServViewModel();
            return $respuesta;
            }catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
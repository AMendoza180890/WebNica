<?php
class serviciosC{
    public function servicioHeaderC(){
        try {
            $respuesta = serviciosM::servicioHeaderM();

            echo '<div class="section-container">
                <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <img class="img-responsive" src="admin/'.$respuesta["HOSImgBanner"].'">
                    </div>
                </div>
                </div>
                <div class="section-container">
                <div class="container">
                    <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <p class="noto">'.utf8_decode($respuesta["HOSDescripcion"]).'</p>
                    </div>
                    </div>';
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
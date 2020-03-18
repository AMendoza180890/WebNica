<?php
class SlideC{
    public function MostrarSlideC(){
        try {
            $respuesta = SlideM::MostrarSlideM();
            foreach ($respuesta as $key => $value) {
                echo '<div class="item">
                <div class="white-text-container background-image-container background-image-container-md slide1" style="background-image: url(admin/'.$value["imagen"].')">
                    <div class="opacity"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h1>'.$value["titular"].'</h1>
                                <p>'.$value["descripcion"].'</p>
                                <a href="'.$value["urlPag"].'" title="" class="btn btn-lg btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>

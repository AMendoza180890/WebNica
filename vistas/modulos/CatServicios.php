<?php
    try {
    $ViewCatServicios = new CatServiciosViewControler();
    $servicios = $ViewCatServicios::CatServicioViewCont();

        for ($i=0; $i < count($servicios); $i++) { 
            echo '<div class="row">';
                for ($j=0; $j < 4; $j++) {
                    if (isset($servicios[$i])) {
                        echo '<div class="col-xs-6 col-lg-3">
                                <div class="fa-container">
                                    <i class="'.$servicios[$i]->CatServIcono.' fa-3x" aria-hidden="true"></i>
                                </div>
                    
                                <div class="text-center">
                                    <h3>'.utf8_decode($servicios[$i]->CatServTitulo).'</h3>
                                </div>
                    
                                <div>
                                    <p class="noto text-center">'.utf8_decode($servicios[$i]->CatServDescripcion).'</p>
                                </div>
                            </div>';
                        $i = $i + 1;
                    } else {
                        break;
                    }   
                }
                    echo '</div>';
                    $i = $i - 1;
        }

    } catch (Exception $ex) {
        mensajes::error($ex);
}
?>
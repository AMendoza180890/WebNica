            <?php
                $ViewCatServicios = new CatServiciosViewControler();
                $servicios = $ViewCatServicios::CatServicioViewCont();

                            for ($j=0; $j < count($servicios); $j++) {
                                    if ($j == 0 || $j == 4) {
                                        echo '<div class="row">';
                                    }
                                        echo '<div class="col-12 col-lg-3">
                                            <div class="fa-container">
                                                <i class="'.utf8_encode($servicios[$j]->CatServIcono).' fa-3x" aria-hidden="true"></i>
                                            </div>

                                            <div class="text-center">
                                                <h3>'.utf8_encode($servicios[$j]->CatServTitulo).'</h3>
                                            </div>

                                            <div>
                                                <p class="noto text-center">'.utf8_encode($servicios[$j]->CatServDescripcion) .'</p>
                                            </div>
                                        </div>';
                                if ($j == 3 || $j == 7) {
                                    echo '</div>';
                                }
                            }  

            ?>
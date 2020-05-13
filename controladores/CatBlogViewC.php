<?php
class classBlogViewC{
    public function listarCatBlogC(){
        try {
            $listaCatBlog = classBlogViewM::listarCatBlogM();
            foreach ($listaCatBlog as $key => $value) {
                $claseTexto = "";
                $claseColor = "";
                $iconos = "";
                if ($key%2) {
                    $claseTexto = "white-text-container";
                    $claseColor = "background-color-container";
                    $iconos = "white-round-icon";
                    classBlogViewC::estrucPagina($value,$claseColor,$claseTexto,$key,$iconos);
                }else {
                    classBlogViewC::estrucPagina($value,$claseColor,$claseTexto,$key,$iconos);
                }
                
                
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    private static function estrucPagina($Value, $color,$claseTexto,$key,$iconos){
                echo '<div class="section-container '.$color.' '.$claseTexto.'" id="'.$key.'">
                    <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                        <div class="text-justify">
                            <h2 class="text-center">'.utf8_decode($Value["CatBlogTitulo"]). '</h2>
                            <img src="admin/'.$Value["CatBlogImg"]. '" alt="Imagen encabezado" class="img-responsive">
                            <p class="expandable text-left" >'.utf8_decode($Value["CatBlogDescripcion"]). '</p>
                            <!--<div class = "btn btn-group">
                                    <p>
                                        <a href="facebook.com" class="social-round-icon fa-icon" title="">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        <a href="https://instagram.com/web_nica/" class="social-round-icon '.$iconos.' fa-icon" title="">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/company/web-nica-537944a3/" class="social-round-icon '.$iconos.' fa-icon" title="">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </p>
                            </div>-->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>';
                //<a href="http://www.facebook.com/sharer.php?s=100&p[url]=https://web-nica.com/index.php?ruta=components#'.$key.'&p[title]='. utf8_decode($Value["CatBlogTitulo"]).'&p[summary]='.utf8_decode($Value["CatBlogTitulo"]) . '&p[images][0]=admin/' . $Value["CatBlogImg"] . '" class="social-round-icon fa-icon" title="">
    }
}
?>
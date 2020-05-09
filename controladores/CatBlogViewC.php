<?php
class classBlogViewC{
    public function listarCatBlogC(){
        try {
            $listaCatBlog = classBlogViewM::listarCatBlogM();
            foreach ($listaCatBlog as $key => $value) {
                $claseTexto = "";
                $claseColor = "";
                if ($key%2) {
                    $claseTexto = "white-text-container";
                    $claseColor = "background-color-container";
                    classBlogViewC::estrucPagina($value,$claseColor,$claseTexto);
                }else {
                    classBlogViewC::estrucPagina($value,$claseColor,$claseTexto);
                }
                
                
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    private static function estrucPagina($Value, $color,$claseTexto){
        echo '<div class="section-container '.$color.' '.$claseTexto.' ">
                    <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                        <div class="text-justify">
                            <h2 class="text-center">'.utf8_decode($Value["CatBlogTitulo"]). '</h2>
                            <img src="admin/'.$Value["CatBlogImg"]. '" alt="Imagen encabezado" class="img-responsive">
                            <p class="expandable text-left" >'.utf8_decode($Value["CatBlogDescripcion"]).'</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>';
    }
}
?>
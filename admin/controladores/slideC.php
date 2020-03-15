<?php
class SlideC{
    public function CrearSlideC(){
        try {
            if (isset($_POST["titularN"])) {
                $rutaImg = "";
                if (isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])) {
                   $rutaImg = EditImgSlide::imgEditar("imagenN");
                }
            }
    
            $datosC = array('titular'=>$_POST["titularN"], 'descripcion' => $_POST["descripcionN"], 'orden'=>$_POST["ordenN"], 'imagen'=>$rutaImg);

            $respuesta = SlideM::CrearSlideM($datosC);

            if ($respuesta == true) {
                echo '<script>window.location="slide";</script>';
            }else {
                echo 'Error intente luego';
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
<?php
class SlideC{
    public function CrearSlideC(){
        try {
            if (isset($_POST["titularN"])) {
                $rutaImg = "";
                if (isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])) {
                   $rutaImg = EditImgSlide::imgEditar("imagenN");
                }
                $datosC = array('titular' => $_POST["titularN"], 'descripcion' => $_POST["descripcionN"], 'orden'=>$_POST["ordenN"], 'imagen'=>$rutaImg);
    
                $respuesta = SlideM::CrearSlideM($datosC);
    
                if ($respuesta == true) {
                    echo '<script>window.location="slide";</script>';
                }else {
                    echo 'Error intente luego';
                }
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
    //ver slide en tabla
    public static function VerSlideC($item, $valor){
        try {
            $respuesta = slideM::VerSlideM($item, $valor);
            return $respuesta;
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }

    // Actualizar Slide
    public function ActualizarSlideC(){
        if (isset($_POST["Sid"])) {
            $rutaImg = $_POST["imagenActual"];
            if (isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])) {
                if (!empty($_POST["imagenActual"])) {
                    unlink($_POST["imagenActual"]);
                }else {
                    mkdir($direc,0755);
                }
                if ($_FILES["imagenE"]) {
                    $rutaImg = EditImgSlide::imgEditar("imagenE");
                }
            }

            $datosC = array('id' => $_POST["Sid"] , 'titular'=> $_POST["titularE"], 'descripcion' => $_POST["descripcionE"], 'orden'=> $_POST["ordenE"],'imagen'=>$rutaImg);

            $respuesta = SlideM::ActualizarSlideM($datosC);

            if ($respuesta == true) {
                echo '<script>window.location = "slide"</script>';
            }else {
                echo 'Error intente luego';
            }
        }
    }
}
?>
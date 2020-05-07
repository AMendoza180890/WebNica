<?php
class SlideC{
    public function CrearSlideC(){
        try {
            if (isset($_POST["titularN"])) {
                $rutaImg = "";
                if (isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])) {
                   $rutaImg = EditImgSlide::imgEditar("imagenN");
                }
                $datosC = array('titular' => utf8_encode($_POST["titularN"]), 'descripcion' => utf8_encode($_POST["descripcionN"]), 'urlPag' => $_POST["urlPagN"], 'orden'=>$_POST["ordenN"], 'imagen'=>$rutaImg);
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
            $mostrarSlide = SlideM::VerSlideM($item, $valor);
            return $mostrarSlide;
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }

    public function ActualizarSlideC(){
        if (isset($_POST["Sid"])) {
            $rutaImg = $_POST["imagenActual"];
            if (isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])) {
                if (!empty($_POST["imagenActual"])) {
                    unlink($_POST["imagenActual"]);
                }else {
                    $direc = "vistas/img/slide/";
                    mkdir($direc,0755);
                }
                if ($_FILES["imagenE"]) {
                    $rutaImg = EditImgSlide::imgEditar("imagenE");
                }
            }
            $datosC = array('id' => $_POST["Sid"] , 'titular'=> utf8_encode($_POST["titularE"]), 'descripcion' => utf8_encode($_POST["descripcionE"]),'urlPag' => $_POST["urlPagE"], 'orden'=> $_POST["ordenE"],'imagen'=>$rutaImg);
            $respuesta = SlideM::ActualizarSlideM($datosC);
            if ($respuesta == true) {
                echo '<script>window.location = "slide"</script>';
            }else {
                echo 'Error intente luego';
            }
        }
    }

    public function BorrarSlideC(){
        if (isset($_GET["Sid"])) {
            $id = $_GET["Sid"];
            if ($_GET["imagenSlide"] != "") {
                unlink($_GET["imagenSlide"]);
            }
            $respuesta = SlideM::BorrarSlideM($id);
            if ($respuesta == true) {
                echo '<script>window.location = "slide";</script>';
            }else {
                echo 'Error intente luego';
            }
        }
    }
}
?>
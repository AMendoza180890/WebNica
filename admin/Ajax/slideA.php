<?php
    require_once "../controladores/slideC.php";
    require_once "../modelo/slideM.php";

    Class SlideA{
        public $Sid;
        public function EditarSlideA(){
            $item = "id";
            $valor = $this->Sid;
            $respuesta = SlideC::VerSlideC($item, $valor);
            //echo '<script>console.log('.$respuesta.')</script>';
            echo json_encode($respuesta);
        }
    }

    if (isset($_POST["Sid"])) {
        $editar = new SlideA();
        $editar -> Sid = $_POST["Sid"];
        $editar -> EditarSlideA();
    }
?>
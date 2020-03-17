<?php
    require_once "../controladores/slideC.php";
    require_once "../modelo/slideM.php";

    Class SlideA{
        public $Sid;
        public function EditarSlideA(){
            $item = "id";
            $valor = $this->Sid;
            $respuesta = SlideC::VerSlideC($item, $valor);
            echo json_encode($respuesta);
        }
    }

    if (isset($_POST["id"])) {
        echo '<script>alert("llega hasta aqui")</script>';
        $editar = new SlideA();
        $editar -> Sid = $_POST["id"];
        $editar -> EditarSlideA();
    }
?>
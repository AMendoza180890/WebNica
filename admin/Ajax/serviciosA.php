<?php
    require_once '../controladores/CatServiciosC.php';
    require_once '../modelo/CatServiciosM.php';
    class servicioA{
        public $ServId;
        public function MostrarServiciosA(){
            $item = "id";
            $valor = $this->ServId;
            $respuesta = CatServicioGralC::CargarServicioC($item,$valor);
            echo json_encode($respuesta);
        }
    }

    if (isset($_POST["ServId"])) {
        $Cargar = new servicioA();
        $Cargar -> ServId = $_POST["ServId"];
        $Cargar -> MostrarServiciosA();
    }
?>
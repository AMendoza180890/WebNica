<?php
    require_once '../controladores/CatServiciosC.php';
    require_once '../modelo/CatServiciosM.php';

    class servicioA{

        public $ServId;

        function __construct($servId)
        {
            $this->ServId = $servId;
        }

        public function MostrarServiciosA(){
            $valor = $this->ServId;
            $respuesta = CatServicioGralC::CargarServicioC($valor);
            //echo '<script>console.log(' . $respuesta . ');</script>';
            echo json_encode($respuesta);
        }
    }

    if (isset($_POST["ServId"])) {
        $Cargar = new servicioA($_POST["ServId"]);
        //$Cargar -> ServId = $_POST["ServId"];
        $Cargar -> MostrarServiciosA();
    }
?>
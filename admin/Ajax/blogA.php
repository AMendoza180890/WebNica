<?php
include_once '../controladores/catblogC.php';
include_once '../modelo/catblogM.php';

class blogAjax{
    public $codEntradaB;
    public function __construct($codEntrada)
    {
        $this->codEntradaB = $codEntrada;
    }

    public function cargarEntradaBlogA(){
        $valor = $this->codEntradaB;
        $entradaObtenida = classBlogC::mostrarEntradaBlogC($valor);
        //echo '<script>console.log("valor de la variable" + ' . $valor . ');</script>';
        //echo '<script>console.log("valor del POST" + ' . $_POST["updtCod"] . ');</script>';
        //echo '<script>console.log('.var_dump($entradaObtenida).');</script>';
        echo json_encode($entradaObtenida);
    }
}

if (isset($_POST["updtCod"])) {
    $obtenerValor = new blogAjax($_POST["updtCod"]);
    $obtenerValor -> cargarEntradaBlogA();
}

?>
<?php
    require_once '../controladores/CatMensajesC.php';
    require_once '../modelo/CatMensajesM.php';  
class mensajeAjax {

    public $idMensaje;
public function obtener_mensajeA(){
            $id = $this -> idMensaje;
            $mensaje_obtenido = mensajesC::mostrarMensajeC($id);
            echo json_encode($mensaje_obtenido);
        }
}

    if (isset($_POST["iduptmsg"])) {
        $cargar_valores = new mensajeAjax();
        $cargar_valores -> idMensaje = $_POST["iduptmsg"];
        $cargar_valores -> obtener_mensajeA();
    }
?>
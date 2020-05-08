<?php
require_once 'mensaje.php';
class contaC{
    public function contactInsert(){
        try {
            if (isset($_POST['nameC'])) {
                $datosC = array('nomb' => utf8_encode($_POST['nameC']), 'correo' => $_POST['emailC'], 'direct' => utf8_encode($_POST['addressC']), 'msg' => utf8_encode($_POST['messageC']));
                $tablaBD = 'catclientcontacto';
                $respuesta = ContactoM::contactIngresoM($datosC, $tablaBD);
                    if ($respuesta == 'bien') {
                        mensajes::exito("Enviado");
                    } else {
                        mensajes::error($respuesta);
                    }
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
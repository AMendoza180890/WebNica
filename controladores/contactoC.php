<?php
require_once 'mensaje.php';
class contaC{
    public function contactInsert(){
        if (isset($_POST['nameC'])) {
            $datosC = array('nomb'=>$_POST['nameC'], 'correo'=>$_POST['emailC'], 'direct'=>$_POST['addressC'], 'msg'=>$_POST['messageC']);
            $tablaBD = 'catclientcontacto';
            $respuesta = ContactoM::contactIngresoM($datosC, $tablaBD);
            if($respuesta == 'bien'){
                mensajes::exito("Enviado");
            }else{
               mensajes::error($respuesta); 
            }
        }
    }
}
?>
<?php
class contaC{
    public function contactInsert(){
        if (isset($_POST['nameC'])) {
            $datosC = array('nomb'=>$_POST['nameC'], 'correo'=>$_POST['emailC'], 'direct'=>$_POST['addressC'], 'msg'=>$_POST['messageC']);
            
            $tablaBD = 'catclientcontacto';

            $respuesta = ContactoM::contactIngresoM($datosC, $tablaBD);
            
            if($respuesta == 'bien'){
                echo "mensaje enviado";
                /*
                header("location:index.php?ruta=contact");
                */
            }else{
               echo "Error al enviar el mensaje: ".$respuesta; 
            }
        }
    }
}
?>
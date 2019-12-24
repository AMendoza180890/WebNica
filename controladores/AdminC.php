<?php
class  AdminC{
    public function IngresoC(){
        if (isset($_POST['user'])) {
            $datosC = array('Usuario'=>$_POST['user'],'password'=>$_POST['passw']);

            $tablaBD = 'CatUsuario';
            
            $res = new AdminM();
            $respuesta = $res->IngresoM($datosC,$tablaBD);

            if ($respuesta['CatUsuario'] == $_POST['user'] && $respuesta['CatPass'] == $_POST['passw']) {
                
                /*mensajes::exito('Se puede ingresar en el recurso usuario: '. $respuesta['CatUsuario'].' password: '. $respuesta['CatPass']);*/
                header('location: index.php?ruta=indexLogin');
            }else {
                mensajes::error('No se puede agregar al recurso');
            }
            
        }
    }
}
?>
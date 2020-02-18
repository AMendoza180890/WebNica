<?php
class  AdminC{
    public function IngresoC(){
        if (isset($_POST['user'])) {
            $datosC = array('Usuario'=>$_POST['user'],'password'=>$_POST['passw']);
            $tablaBD = 'catusuario';
            $res = new AdminM();
            $respuesta = $res->IngresoM($datosC,$tablaBD);
            if ($respuesta['CatUsuario'] == $_POST['user'] && $respuesta['CatPass'] == $_POST['passw']) {
                echo '<script> 
                        windows.location="index.php?url=indexLogin";
                    </script>';
            }else {
                mensajes::error('No se puede agregar al recurso');
            }  
        }
    }
}
?>
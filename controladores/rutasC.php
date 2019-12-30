<?php
class RutasControlador{
    public function Plantilla(){
        include 'vistas/plantilla.php';
    }

    public function Rutas(){
        try {
            if (isset($_GET['ruta'])) {
                $rutas = $_GET['ruta'];
            }else {
                $rutas='index';
            }
            $sourse = 'catpaginas';
            $respuesta = Modelo::RutasModelo($rutas,$sourse);          
            include $respuesta;
        } catch (Exception $ex) {
            mensajes::error($ex);
        }     
    }
}
?>
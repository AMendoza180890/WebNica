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

            $res = new Modelo();  
            $respuesta = $res->RutasModelo($rutas);          

            include $respuesta;
        } catch (Exception $ex) {
            mensajes::error($ex);
        }     
    }
}
?>
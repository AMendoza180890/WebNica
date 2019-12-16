<?php
    class Modelo{
        static public function RutasModelo($rutas){
            if ($rutas == 'about'||$rutas == 'components'||$rutas =='index'||$rutas == 'contact') {
                $pagina = 'vistas/modulos/'.$rutas.'.php';
            }else if ($rutas == 'index') {
                $pagina = "vistas/modulos/index.php";
            }else {
                $pagina = "vistas/modulos/index.php";
            }
            return $pagina;
        }
    }
?>
<?php
    class Modelo{

        public static function RutasModelo($rutas){
        try {
            $pages = array('index', 'about', 'components', 'contact', 'login','indexLogin');

            for ($i = 0; $i < count($pages); $i++) {
                if ($rutas == $pages[$i]) {
                    $pagina = 'vistas/modulos/' . $rutas . '.php';
                    break;
                }
            }
            return $pagina;
        } catch (Exception $ex) {
            return mensajes::error($ex);
        }
    }
}
?>
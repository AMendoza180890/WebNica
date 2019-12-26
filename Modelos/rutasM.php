<?php
    class Modelo{

        public static function RutasModelo($rutas){
        try {
            $pages = array('index', 'about', 'components', 'contact', 'login','indexLogin','error','salir');
            for ($i = 0; $i < count($pages); $i++) {
                if ($rutas == $pages[$i]) {
                    $pagina = 'vistas/modulos/' . $rutas . '.php';
                    break;
                }
            }
            if (!empty($pagina)) {
                return $pagina;
            }else {
                return  $pagina = 'vistas/modulos/error.php';
            }
        } catch (Exception $ex) {
            return mensajes::error($ex);
        }
    }
}
?>
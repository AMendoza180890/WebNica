<?php
    require_once 'conexionBD.php';

    class Modelo extends ConexionBD{

        public static function RutasModelo($rutas){
        try {
            $conec  =   new ConexionBD();
            $pdo    =   $conec->cBD()->prepare('SELECT * FROM CatPaginas');
            $pdo    ->  execute();
            
            while   ($pages         =       $pdo->fetch(PDO::FETCH_ASSOC)){
                if  ($rutas         ==      $pages['CatPagNombre']) {
                    $pagina         =       'vistas/modulos/' . $rutas . '.php';
                    break;
                }
            }
            if (!empty($pagina)) {
                return $pagina;
            } else {
                return  $pagina = 'vistas/modulos/error.php';
            }
            
            /*$array = array('index', 'about', 'components', 'contact', 'login','indexLogin','error','salir');
            var_dump($array);*/
            
            /*
            for ($i = 0; $i < count($pages); $i++) {
                if ($rutas == $pages[$i]) {
                    $pagina = 'vistas/modulos/' . $rutas . '.php';
                    break;
                }
            }
            */
        } catch (Exception $ex) {
            return mensajes::error($ex);
        }
    }
}
?>
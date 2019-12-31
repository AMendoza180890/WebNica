<?php
    require_once 'conexionBD.php';

    class Modelo extends ConexionBD{

        public static function RutasModelo($rutas, $sourse){
        try {
            $conec  =   new ConexionBD();
            $pdo    =   $conec-> cBD()->prepare("SELECT * FROM $sourse");
            $pdo    ->  execute();
            while ($pages  =  $pdo->fetch(PDO::FETCH_ASSOC)){
                if  ($rutas  == $pages['CatPagNombre']) {
                    $pagina  =  'vistas/modulos/'.$rutas.'.php';
                    break;
                }
            }
            if (!empty($pagina)) {
                return $pagina;
            } else {
                return  $pagina = 'vistas/modulos/error.php';
            }
        } catch (Exception $ex) {
            return mensajes::error($ex);
        }
    }
}
?>
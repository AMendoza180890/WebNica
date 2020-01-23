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
//Cargar paginas dinamico
    public static function webPage($sourse){
        try{
            $conec = new ConexionBD();
            $pag = $conec->cBD()->prepare("SELECT * FROM $sourse WHERE CatPagEstado = 'enable'");
            $pag->execute();
            while ($array = $pag->fetchObject(__CLASS__)) {
                $ListPag[] = $array;
            }
            return $ListPag;
        }catch(PDOException $pdoe){
            mensajes::error($pdoe);
        }
    }
}
?>
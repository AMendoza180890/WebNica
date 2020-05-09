<?php
include_once 'conexionBD.php';
class classBlogViewM extends ConBD{
    public static function listarCatBlogM(){
        try {
            $cn = new ConBD;
            $pdo    =   $cn ->  cBD()   ->  prepare("SELECT * FROM catblog ORDER BY id DESC");
            $pdo    ->  execute();
            return  $pdo    ->  fetchAll();
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
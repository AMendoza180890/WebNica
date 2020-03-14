<?php
require_once 'ConexionBD.php';
class ActualizarUserM extends ConexionBD{
    public static function UpdateInfoUserM($item, $valor){
        try {
            if ($item != null) {
                $cn = new ConexionBD;
                $pdo    =   $cn ->  cBD()   ->  prepare("SELECT a.CatUsuId, a.CatUsuario, a.CatPass, a.CatUsuFoto, a.CatRol, b.catrolnombre FROM catusuario AS a inner join catroles AS b WHERE a.CatRol = b.catrolid AND a.catUsuEstado = 1 AND a.CatUsuId = :$item");
                $pdo    ->  bindParam(":".$item, $valor, PDO::PARAM_INT);
                $pdo    ->  execute();
                return $pdo -> fetch();
            }else {
                $cn     =   new ConexionBD;
                $pdo    =   $cn  ->  cBD()   ->  prepare("SELECT a.CatUsuId, a.CatUsuario, a.CatPass, a.CatUsuFoto, a.CatRol, b.catrolnombre FROM catusuario AS a inner join catroles AS b WHERE a.CatRol = b.catrolid AND a.catUsuEstado = 1");
                $pdo    ->  execute();
                return  $pdo -> fetchAll();
            }
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }

    public static function UpdateUM($datoC){
        try {

            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("UPDATE catusuario SET CatUsuario = :CatUsuario, CatPass = :CatPass, CatUsuFoto = :CatUsuFoto, CatRol = :CatRol WHERE CatUsuId = :CatUsuId");


            $pdo->bindParam(":CatUsuId", $datoC["CatUsuId"], PDO::PARAM_INT);
            $pdo->bindParam(":CatUsuario", $datoC["CatUsuario"], PDO::PARAM_STR);
            $pdo->bindParam(":CatPass", $datoC["CatPass"], PDO::PARAM_STR);
            $pdo->bindParam(":CatUsuFoto", $datoC["CatUsuFoto"], PDO::PARAM_STR);
            $pdo->bindParam(":CatRol", $datoC["CatRol"], PDO::PARAM_INT);

            if ($pdo -> execute()) {
                return true;
            }else {
                return false;
            }
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
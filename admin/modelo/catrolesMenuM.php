<?php
require_once 'ConexionBD.php';
class rolesMenuM extends ConexionBD{
    public static function catrolesMenuM($RolMenuId){
        try {
            $cn = new ConexionBD;
    
            $pdo = $cn->cBD()->prepare("SELECT catmenu.CatMenuId, catmenu.CatMenuRef, catmenu.CatMenuIcon, catmenu.CatMenuTag
                                        FROM unionrolmenu
                                        INNER JOIN catmenu ON unionrolmenu.CatMenuId = catmenu.CatMenuId
                                        INNER JOIN catroles ON unionrolmenu.CatRolId = catroles.CatRolId 
                                        WHERE catroles.CatRolId = :id AND  unionrolmenu.CatEstCod = 1");
            $pdo -> bindParam(":id",$RolMenuId,PDO::PARAM_INT);
            $pdo -> execute();
    
            return $pdo->fetchAll();
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public static function catRolesMenuMostrarM($RolId){
        try {
            $cn = new conexionBD;
            $pdo = $cn->cBD()->prepare("SELECT catmenu.CatMenuId, catmenu.CatMenuTag, catmenu.CatMenuIcon, 
                                        unionrolmenu.CatEstCod, catestado.CatEstDescripcion FROM dbwebnica.unionrolmenu 
                                        INNER JOIN catmenu ON unionrolmenu.CatMenuId = catmenu.CatMenuId 
                                        INNER JOIN catestado ON unionrolmenu.CatEstCod = catestado.CatEstCod
                                        WHERE unionrolmenu.CatRolId = :id");
            $pdo->bindParam(":id",$RolId,PDO::PARAM_INT);
            $pdo->execute();

            return $pdo->fetchAll();
            
        } catch (Exception  $ex) {
            mensajes::error($ex);
        }
    }

    public static function cargarRolesM(){
        try {
            $cn = new ConexionBD;

            $pdo = $cn->cBD()->prepare("SELECT CatRolId, CatRolNombre FROM catroles");
            $pdo -> execute();

            return $pdo->fetchAll();

        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public static function catrolesMenuUpdateM($Menu, $codMenu, $codRol){
        try {
            $cn = new conexionBD;
            
            $pdo = $cn->cBD()->prepare("UPDATE unionrolmenu 
                                        SET CatEstCod = :CatEstCod
                                        WHERE  CatRolId = :CatRolId AND CatMenuId = :CatMenuId");
            $pdo    ->  bindParam(":CatMenuId",   $Menu,      PDO::PARAM_INT);
            $pdo    ->  bindParam(":CatEstCod",   $codMenu,   PDO::PARAM_INT);
            $pdo    ->  bindParam(":CatRolId",   $codRol,    PDO::PARAM_INT);

            $pdo -> execute();

        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}

?>
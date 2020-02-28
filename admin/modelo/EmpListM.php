<?php
require_once 'ConexionBD.php';
class EmpListM extends ConexionBD
{
    public static function listaEmp()
    {
        try {
            $con = new ConexionBD();
            $pdo = $con->cBD()->prepare("SELECT CatEmpId, CatEmpNombres FROM catempleado");
            $pdo->execute();
            return $pdo->fetchAll();
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
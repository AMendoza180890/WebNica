<?php
    include_once 'ConexionBD.php';
class EmpListM extends ConexionBD
{
    public static function listaEmp()
    {
        try {
            $con = new ConexionBD();
            $pdo = $con->cBD()->prepare("SELECT CatEmpId, CatEmpNombres FROM catempleado WHERE CatEmpEstado = 1");
            $pdo->execute();
            return $pdo->fetchAll();
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
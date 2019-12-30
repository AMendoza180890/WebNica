<?php
include_once 'conexionBD.php';

class empleadoM extends ConexionBD{
    public static function empleadoModelo($tabla){
        try {
            $conec = new ConexionBD();
            $emp = $conec->cBD()->prepare("SELECT * FROM $tabla WHERE CatEmpEstado = 1");
            $emp -> execute();
            while($array = $emp->fetchObject(__CLASS__)){
                $CatEmp[] = $array;
            }
            return $CatEmp;
        } catch (PDOException $ex) {
            return mensajes::error($ex);
        }
    }
}
?>
<?php
class EmpleadoC{
    public static function empleadoCont(){
        try {
                $sourse = 'catempleado';
                $empleados = empleadoM::empleadoModelo($sourse);
                return $empleados;   
        }catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>

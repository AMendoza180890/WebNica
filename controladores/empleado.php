<?php
class EmpleadoC{
    public static function empleadoCont(){
        try {
                $empleados = empleadoM::empleadoModelo();
                return $empleados;   
        }catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>

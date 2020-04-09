<?php
class mensajes{
    public static function error($mensaje){
            $directorio = fopen('logs/error.log', 'a');
            fwrite($directorio, "[" . date("r") . "] Error: $mensaje\r\n");
            fclose($directorio);
    }
    
    public static function exito($mensaje){
        echo 'success: '.($mensaje);;
    }
}
?>
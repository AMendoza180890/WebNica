<?php
class mensajes{
    public static function error($mensaje){
        if (!file_exists($GLOBALS['PATH'])) {
                mkdir("../logs", 0777);
                mensajes::registrar_log("Error",$mensaje);
        }else{
                mensajes::registrar_log("Error",$mensaje);
        }
            
    }
        
    public static function exito($mensaje){
        if (!file_exists($GLOBALS['PATH'])) {
            mkdir("logs", 0777);
            mensajes::registrar_log("Exito_Bien_Hecho",$mensaje);
        } else {
            mensajes::registrar_log("Exito_Bien_Hecho",$mensaje);
        }
    }

    private static function registrar_log($titulo_estado,$mensaje)
    {
        $ip = $_SERVER["REMOTE_ADDR"];
        $directorio = fopen($GLOBALS['PATH'], 'a');
        fwrite($directorio,"IP: $ip - [" . date("r") . "] $titulo_estado: $mensaje\r\n");
        fclose($directorio);
    }
}
$PATH = 'logs/error.log';
?>
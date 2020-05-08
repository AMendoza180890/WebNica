<?php
    require_once 'ConexionBD.php';
    class classBlogM extends ConexionBD{
        public static function cargarListaEntradasM(){
            try {
                $cn = new ConexionBD();
                $pdo = $cn->cBD()->prepare("SELECT id, CatBlogTitulo, CatBlogImg, CatBlogDescripcion, CatBlogFecha, Orden FROM catblog");
                $pdo ->execute();
                return $pdo -> fetchAll();
            } catch (exception $ex) {
                mensajes::error($ex);
            }
        }

        public static function insertarEntradaBlog($datos){
            try {
                echo '<script>console.log("'.var_dump($datos).'");</script>';
                if (!empty($datos)) {
                    $cn = new ConexionBD;
                    $pdo = $cn->cBD()->prepare("INSERT INTO catblog (CatBlogTitulo, CatBlogImg, CatBlogDescripcion, CatBlogFecha, Orden) VALUES (:CatBlogTitulo, :CatBlogImg, :CatBlogDescripcion, :CatBlogFecha, :Orden)");
                    $pdo    ->  bindParam(":CatBlogTitulo",$datos["CatBlogTitulo"],pdo::PARAM_STR);
                    $pdo    ->  bindParam(":CatBlogImg", $datos["CatBlogImg"], pdo::PARAM_STR);
                    $pdo    ->  bindParam(":CatBlogDescripcion", $datos["CatBlogDescripcion"], pdo::PARAM_STR);
                    $pdo    ->  bindParam(":CatBlogFecha", $datos["CatBlogFecha"], pdo::PARAM_STR);
                    $pdo    ->  bindParam(":Orden", $datos["Orden"], pdo::PARAM_INT);
                        
                    if ($pdo -> execute()) {
                            return true;
                            }else{
                                return false;
                                }
                }
            } catch (exception $ex) {
                mensajes::error($ex);
            }
           
        }

        public static function eliminarEntradaBlog($codEliminar){
            try {
                $cn = new ConexionBD;
                $pdo = $cn->cBD()->prepare("DELETE FROM catblog WHERE id = :id");
                $pdo -> bindParam(":id", $codEliminar,PDO::PARAM_INT);
                if ($pdo->execute()) {
                    return true;
                }else{
                    return false;
                }
            } catch (exception $ex) {
                mensajes::error($ex);
            }
        }
    }
?>
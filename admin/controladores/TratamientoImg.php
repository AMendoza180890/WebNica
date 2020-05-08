<?php
 class EditImg{
     public static function imgEditar($item){
         try {
            if ($_FILES[$item]["type"] == "image/jpeg") {
                $nombre = mt_rand(10, 999);
                $rutaImg = 'vistas/img/usuarios/U' . $nombre . ".jpg";
                $foto = imagecreatefromjpeg($_FILES[$item]["tmp_name"]);
                imagejpeg($foto, $rutaImg);
            }
            if ($_FILES[$item]["type"] == "image/png") {
                $nombre = mt_rand(10, 999);
                $rutaImg = 'vistas/img/usuarios/U' . $nombre . ".png";
                $foto = imagecreatefrompng($_FILES[$item]["tmp_name"]);
                imagepng($foto, $rutaImg);
            }
            return $rutaImg;
         } catch (Exception $ex) {
             mensajes::error($ex);
         }
        
     }

    public static function imgEditarServicio($item)
    {
        try {
            if ($_FILES[$item]["type"] == "image/jpeg") {
                $nombre = mt_rand(10, 999);
                $rutaImg = 'vistas/img/servicio/encabezado/S' . $nombre . ".jpg";
                $foto = imagecreatefromjpeg($_FILES[$item]["tmp_name"]);
                imagejpeg($foto, $rutaImg);
            }
            if ($_FILES[$item]["type"] == "image/png") {
                $nombre = mt_rand(10, 999);
                $rutaImg = 'vistas/img/servicio/encabezado/S' . $nombre . ".png";
                $foto = imagecreatefrompng($_FILES[$item]["tmp_name"]);
                imagepng($foto, $rutaImg);
            }
            return $rutaImg;
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
    //Tratamiento de imagen para blog
    public static function imgEditarBlog($item)
    {
        try {
            if ($_FILES[$item]["type"] == "image/jpeg") {
                $nombre = mt_rand(10, 999);
                $rutaImg = 'vistas/img/blog/B' . $nombre . ".jpg";
                $foto = imagecreatefromjpeg($_FILES[$item]["tmp_name"]);
                imagejpeg($foto, $rutaImg);
            }
            if ($_FILES[$item]["type"] == "image/png") {
                $nombre = mt_rand(10, 999);
                $rutaImg = 'vistas/img/blog/B' . $nombre . ".png";
                $foto = imagecreatefrompng($_FILES[$item]["tmp_name"]);
                imagepng($foto, $rutaImg);
            }
            return $rutaImg;
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }

 }    
?>
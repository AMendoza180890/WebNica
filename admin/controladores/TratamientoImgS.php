<?php
 class EditImgSlide{
     public static function imgEditar($item){
         try {
            if ($_FILES[$item]["type"] == "image/jpeg") {
                $nombre = mt_rand(10, 999);
                $rutaImg = 'vistas/img/slide/S' . $nombre . ".jpg";
                $foto = imagecreatefromjpeg($_FILES[$item]["tmp_name"]);
                imagejpeg($foto, $rutaImg);
            }
            if ($_FILES[$item]["type"] == "image/png") {
                $nombre = mt_rand(10, 999);
                $rutaImg = 'vistas/img/slide/S' . $nombre . ".png";
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
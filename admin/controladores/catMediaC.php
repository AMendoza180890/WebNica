<?php
class clsCatMediaC{
    public function verCatMedia(){
        try {
            $listaCatMedia = clsCatMediaM::cargarCatMedia();
            foreach ($listaCatMedia as $key => $value) {
                echo ' <tr>
                             <th>'.$value["id"]. '</th>
                             <th>'.$value["catMediaDescripcion"]. '</th>
                             <th>'.$value["catMediaImg"]. '</th>
                             <th>' . $value["catMediaImgPublic"] . '</th>
                             <th> <img src="' . $value["catMediaImg"] . '" alt="imagen de muestra" srcset="" width ="100px"></th>
                             <th>
                                 <button class="btn btn-danger eliminarMedia" blgidCln="' . $value['id'] . '"><i class="fa fa-times"></i></button>
                             </th>
                         </tr>';
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public function ingresarNuevaCatMediaC(){
        try {
            if (isset($_FILES["inImgCatMediaN"]["tmp_name"])) {
                $pathImg = EditImg::imgEditarMedia("inImgCatMediaN");
                $publicPathImg = "http://www.web-nica.com/".$pathImg;
                $datos = array('catMediaDescripcion' => utf8_encode($_POST["descripcionN"]), 'catMediaImg'=> $pathImg, 'catMediaImgPublic'=>$publicPathImg);
                $ingresarNuevoContenido = clsCatMediaM::ingresarNuevoCatMediaM($datos);
                if ($ingresarNuevoContenido) {
                    echo '<script>window.location="media";</script>';
                }else{
                    echo '<script>console.log("error al ingresar, porfavor intentar luego");</script>';
                }

            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public function eliminarCatMediaC(){
        try {
            if (isset($_GET["cdel"])) {
                $codDel = $_GET["cdel"];
                $eliminarImg = clsCatMediaM::eliminarCatMediaC($codDel);
                if ($eliminarImg) {
                    echo '<script>window.location="media";</script>';
                }else{
                    echo '<script>console.log("hubo un error, intente luego porfavor");</script>';
                }
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
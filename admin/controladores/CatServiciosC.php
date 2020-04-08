<?php
class CatServicioGralC{
    //mostrar informacion en el gestor de contenido
    public function verServiciosC(){
        try {
            $respuesta = CatServicioGralM::verServiciosM();
            foreach ($respuesta as $key => $value) {
                echo '<tr>
                        <td>'.$value["id"].'</td>
                         <td>'.$value["catservicono"].'</td>
                         <td>'.utf8_encode($value["catservtitulo"]).'</td>
                         <td>'.utf8_encode($value["catservdescripcion"]).'</td>
                         <td>
                             <div class="btn-group">
                                 <button class="btn btn-success EditarServicio" ServId="'.$value["id"]. '"><i class="fa fa-pencil" data-toggle="modal" data-target="#EditarServicio"></i></button>
                                 <button class="btn btn-danger BorrarServicios" ServId="'.$value["id"].'"><i class="fa fa-times"></i></button>
                             </div>
                         </td>
                         </tr>';
            }
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }

    public function CrearServicioGralC(){
        try {
            if (isset($_POST["iconoN"])) {
                $datosC = array('iconServ'=> $_POST["iconoN"],'titleServ'=> $_POST["titularN"],'descServ'=> $_POST["descripcionN"]);
                $respuesta = CatServicioGralM::CrearServicioGralM($datosC);
                if ($respuesta) {
                    echo '<script>
                            window.location="nosotros";
                                </script>';
                }else {
                    echo 'A ocurrido un error, Intentelo mas tarde';
                }
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public static function CargarServicioC($item, $valor){
        try {
            if (isset($_POST["ServId"])) {
                $respuesta = CatServicioGralM::CargarServicioM($item, $valor);
                return $respuesta;
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public function ActualizarCatServicioC(){
      try {
        if (isset($_POST["Servicioid"])) {
            $datosC = array('id' => $_POST["Servicioid"],'iconoNew' => $_POST["iconoE"],'tituloNew' => $_POST["titularE"],'descripcionNew' => $_POST["descripcionE"] );

            $respuesta = CatServicioGralM::ActualizarCatServicioM($datosC);

            if ($respuesta) {
                echo '<script>window.location="nosotros";</script>';
            }else {
                echo 'Ocurrio un error, porfavor intentar luego';
            }
        }
      } catch (Exception $ex) {
          mensajes::error($ex);
      }
    }

    public function CatServicioBorrarC(){
        try {
            if (isset($_GET["ServId"])) {
                $datosC = $_GET["ServId"];
                $respuesta = CatServicioGralM::CatServiciosBorrarM($datosC);
                if ($respuesta) {
                    echo '<script>window.location="nosotros";</script>';
                }else {
                    echo 'Ocurrio un erro, intente luego';
                }
            }
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
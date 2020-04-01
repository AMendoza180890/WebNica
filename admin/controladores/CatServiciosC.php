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
                         <td>'.$value["catservtitulo"].'</td>
                         <td>'.$value["catservdescripcion"].'</td>
                         <td>
                             <div class="btn-group">
                                 <button class="btn btn-success EditarServicio" data-toggle="modal" data-target="#EditarServicio"><i class="fa fa-pencil"></i></button>
                                 <button class="btn btn-danger BorrarServicios"><i class="fa fa-times"></i></button>
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
                $datosC = array('icono'=> $_POST["iconoN"],'titulo'=> $_POST["titularN"],'descripcion'=> $_POST["descripcionN"]);
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
}
?>
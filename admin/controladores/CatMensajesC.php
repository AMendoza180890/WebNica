<?php
class mensajesC{
    public function cargar_lista_mensajesC(){
        try {
            $lista_mensajes = mensajesM::cargar_lista_mensajesM();
            foreach ($lista_mensajes as $key => $value) {
                echo '<tr>
                <td>' . $value["catclicontid"].'</td>
                <td>' . $value["catclicontName"] . '</td>
                <td>' . $value["catclicontEmail"] . '</td>';
                echo '<td>
                        <div class="btn-group">
                            <button class="btn btn-success EditarU" CatUsuId="' . $value["catclicontid"] . '"><i class="fa fa-pencil" data-toggle="modal" data-target="#EditarU"></i></button>
                            <button class="btn btn-danger btndelmsg" idErs="' . $value["catclicontid"] .'"><i class="fa fa-times"></i></button>
                        </div>
                    </td> 
                </tr>';
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public function borrar_mensaje(){
        try {
            if (isset($_GET["id"])) {
                $idBorrar = $_GET["id"];
                $mensaje = mensajesM::eliminar_mensaje($idBorrar);
                if ($mensaje) {
                    echo '<script>window.location="mensajes";</script>';
                    mensajes::exito("Se envio el mensaje correctamente");
                } else {
                    echo 'Ha ocurrido un error, Intente luego';
                    mensajes::error("Ocurrio un problema al eliminar el mensaje");
                }
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
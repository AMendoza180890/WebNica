<?php
class clsMultimediaC{
    public function mostrarListaMediaC(){
        try {
            $lista_Multimedia = clsMultimediaM::mostrarListaMediaM();
            foreach ($lista_Multimedia as $key => $value) {
                echo '<tr>
                            <th>'.$value["id"]. '</th>
                            <th>' . $value["id"] . '</th>
                            <th>' . $value["id"] . '</th>
                            <th>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Cargar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                                </div>
                            </th>
                    </tr>';
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
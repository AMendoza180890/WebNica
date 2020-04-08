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
                            <button class="btn btn-danger BorrarU" CatUsuId="' . $value["catclicontid"] .'"><i class="fa fa-times"></i></button>
                        </div>
                    </td> 
                </tr>';
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
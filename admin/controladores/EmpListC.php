<?php
class UsersList{
    public function verUsuarioC(){
        $respuesta = UsuariosListM::listaUsuario();
        foreach ($respuesta as $key => $value) {
            echo '<tr>
                             <td>'.($key+1).'</td>
                             <td>'.$value["CatUsuario"]. '</td>
                             <td>' . $value["CatPass"] . '</td>
                             <td><img src="vistas/img/usuarios/defecto.png" class="user-image" width="40px" alt="User Image"></td>
                             <td>' . $value["catrolnombre"] . '</td>

                             <td>
                                 <div class="btn-group">
                                     <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                     <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                 </div>
                             </td>
                         </tr>';
        }
    }
}
?>
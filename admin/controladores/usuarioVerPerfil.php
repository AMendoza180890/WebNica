<?php
    class UsuarioVerPerfilC{
        public function UserVerPerfilC(){
            $CatUsuId = $_SESSION["CatUsuId"];
            $respuesta = usuarioVerPerfilM::UserVerPerfilM($CatUsuId);

                echo '<tr>
                    <td>' . $respuesta["CatUsuario"] . '</td>
                    <td>' . $respuesta["CatPass"] . '</td>';
                    if ($respuesta["CatUsuFoto"] != "") {
                        echo '<td> <img src="' . $respuesta["CatUsuFoto"] . '" class="user-image" width="40px" alt="User Image"></td>';
                    } else {
                        echo '<td> <img src="vistas/img/usuarios/defecto.png" class="user-image" width="40px" alt="User Image"></td>';
                    }
                        echo '<td>
                            <div class="btn-group">
                                <button class="btn btn-success EditarU" CatUsuId="' . $respuesta["CatUsuId"] . '"><i class="fa fa-pencil" data-toggle="modal" data-target="#EditarU"></i></button>
                            </div>
                        </td> 
                    </tr>';
        }
    }
?>
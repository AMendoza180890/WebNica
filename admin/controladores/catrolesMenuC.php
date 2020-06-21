<?php
    class rolesMenuC{
        public function CatRolesMenuC($RolId){
            try {
                if (isset($RolId)) {
                    $cargarMenu = rolesMenuM::catrolesMenuM($RolId);

                    foreach ($cargarMenu as $key => $value) {
                        echo '<li>
                                <a href="'.$value['CatMenuRef'].'"><i class="'.$value['CatMenuIcon'].'"></i>
                                <span>'.$value['CatMenuTag'].'</span></a>
                             </li>';
                    }
                }
            } catch (Exception $ex) {
                mensajes::exito($ex);
            }
        }

        public static function catRolesMenuMostrarListaC($RolId){
            try {
                if (isset($RolId)) {
                //echo '<script>console.log("En catrolesMenuC el valor es " + ' . $RolId . ')</script>';
                    $listaMenu = rolesMenuM::catRolesMenuMostrarM($RolId);
                    echo '
                    <table class="table table-bordered table-hover table-striped TBRoles" id="TBRoles">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>Control</th>
                                <th>Icono</th>
                                <th>Permisos</th>
                                <!--<th>aplicar</th>-->
                            </tr>
                        </thead>';
                        foreach ($listaMenu as $key => $value) {
                                echo '<tbody>
                                        <th>'.$value['CatMenuId'].'</th>
                                        <th id="TagMenu">'.$value['CatMenuTag'].'</th>
                                        <th><i class="'.$value['CatMenuIcon']. '"></i></th>
                                        <th>
                                            <select name="estadoN" id="' . $value["CatMenuId"] . '" idMenu="'. $value['CatMenuId']. '">
                                                <option value="1" ' . (($value["CatEstCod"] == "1") ? 'selected= "selected"' : "") .'>Habilitado </option>
                                                <option value="2" ' . (($value["CatEstCod"] == "2") ? 'selected= "selected"' : "") . '>Desabilitado</option>
                                            </select>
                                        </th>
                                        <!--<th>
                                        <button class="btn btn-success" id="btnAplicarMenu"><i class="fa fa-pencil"></i></button>
                                        </th>-->
                                    </tbody>';
                        }
                    echo '</table>';
                    //' . ($value["CatEstDescripcion"] === "Desabilitado") ? 'selected = "selected"' : '' .'
                    //<option value"'.$value['CatEstCod'].'">'.$value["CatEstDescripcion"].'</option>
                    //echo '<script>window.location="CatMenuRolesControl"</script>';
                }
            } catch (exception $ex) {
                mensajes::error($ex);
            }
        }

        public static function cargarRolesC(){
            try {
                $ListarRoles = rolesMenuM::cargarRolesM();
                
                foreach ($ListarRoles as $key => $value) {
                    echo '<option name="CatRolesList" id="CatRolesList" value="'.$value['CatRolId'].'">'.$value['CatRolNombre'].'</option>';
                }

            } catch (exception $ex) {
                mensajes::error($ex);
            }
        }

        public static function catrolesMenuUpdateC($Menu,$codMenu,$codRol){
                try {
                    if (isset($Menu) && isset($codMenu) && isset($codRol)) {
                        rolesMenuM::catrolesMenuUpdateM($Menu,$codMenu,$codRol);
                    }
                } catch (exception $ex) {
                    mensajes::error($ex);
                }
        }
    }
?>
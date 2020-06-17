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
    }
?>
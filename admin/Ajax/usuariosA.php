<?php
require_once '../controladores/ActualizarUserC.php';
require_once '../modelo/ActualizarUserM.php';

class UsuariosA{
        public $CatUsuId;
        public function EUsuarioA(){
            $item = "CatUsuId";
            $valor = $this->CatUsuId;
            $respuesta = UpdateUserC::UpdateInfoUserC($item,$valor);
            echo json_encode($respuesta);
        }
    }
            if (isset($_POST["CatUsuId"])) {
                $editarU = new UsuariosA();
                $editarU -> CatUsuId = $_POST["CatUsuId"];
                $editarU ->EUsuarioA();
            }
?>
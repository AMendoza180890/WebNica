<?php
    require_once '../controladores/catrolesMenuC.php';
    require_once '../modelo/catrolesMenuM.php';

    class updateMenuRolAjax{
        public $idMenu;
        public $codMenu;
        public $codRol;

        public function __construct($Menu, $codOpcionMenu, $rolId )
        {
            $this->idMenu = $Menu;
            $this->codMenu = $codOpcionMenu;
            $this->codRol = $rolId;
        }

        public function updateMenu(){
            $Menu       =       $this->idMenu;
            $codMenu    =       $this->codMenu;
            $codRol     =       $this->codRol;
            //echo '<script>console.log("Menu " + '.$Menu.' + "codMenu " + "'.$codMenu.'" + "codRol " + "'.$codRol.'")</script>';
            rolesMenuC::catrolesMenuUpdateC($Menu,$codMenu,$codRol);
        }
    }

    if (isset($_POST["codMenu"]) && isset($_POST["idMenu"]) && isset($_POST["codigoRol"])) {
        $updateMenuRol = new updateMenuRolAjax($_POST["idMenu"], $_POST["codMenu"], $_POST["codigoRol"]);
        $updateMenuRol -> updateMenu();
    }
?>
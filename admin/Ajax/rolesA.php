<?PHP
require_once '../controladores/catrolesMenuC.php';
require_once '../modelo/catrolesMenuM.php';

class rolesAjax{
    public $RolCod;
    
    public function __construct($ActualRolCod)
    {
        $this->RolCod = $ActualRolCod;   
    }
    
    public function CargarListaMenu(){
        $cod = $this->RolCod;
        //echo '<script>console.log("En rolesA el valor es " + '.$cod.')</script>';
        rolesMenuC::catRolesMenuMostrarListaC($cod);
    }
}
    if ($_POST["codRol"]) {
        $codRoles = new rolesAjax($_POST["codRol"]);
        $codRoles -> CargarListaMenu();
    }    
?>
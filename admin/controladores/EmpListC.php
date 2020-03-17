<?php
class EmpList{
    public function verEmpC(){
        $respuesta = EmpListM::listaEmp();
        foreach ($respuesta as $key => $value) {
            echo '<option value="'.$value["CatEmpId"].'">'.$value["CatEmpNombres"].'</option>';
        }
    }
}
?>
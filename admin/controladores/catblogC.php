<?php
class classBlogC{
    public function mostrarListaBlogC(){
        try {
            $listaEntradas = classBlogM::cargarListaEntradasM();
            foreach ($listaEntradas as $key => $value) {
                echo '<tr>
                            <td>'.$value['id'].'</td>
                            <td>'. utf8_decode($value['CatBlogTitulo']).'</td>
                            <td><img src="'. $value['CatBlogImg'].'" alt="imagen a mostrar" width="100px"></td>';
                            
                            //$textoModificado = tratamientoTxt::cutString($value['CatBlogDescripcion']);
                                echo '<td>' . utf8_decode($value['CatBlogDescripcion']) . '</td>';
                            
                echo        '<td>'.$value['CatBlogFecha'].'</td>
                            <th>'.$value['Orden'].'</th>
                            <td>
                                <div class="btn btn-group">
                                    <button class="btn btn-success actualizarEntrada" updtCod="'.$value['id']. '"><i class="fa fa-pencil" data-toggle="modal" data-target="#editarEntrada"></i></button>
                                    <button class="btn btn-danger eliminarEntrada" blgidCln="'.$value['id'].'"><i class="fa fa-times"></i></button>
                                </div>
                            </td>
                        </tr>';
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public function insertarEntradaBlogC(){
        try {
            if (isset($_POST["catBlogTituloN"])) {
                if (isset($_FILES["catBlogImgN"]["tmp_name"]) && !empty($_FILES["catBlogImgN"]["tmp_name"])) {
                    $catBlogImgProcesado = EditImg::imgEditarBlog("catBlogImgN");
                    $fecha = date("Y-m-d H:i:s");
                    $Datos = array('CatBlogTitulo'=> utf8_encode($_POST["catBlogTituloN"]),'CatBlogImg'=> $catBlogImgProcesado, 'CatBlogDescripcion'=> utf8_encode($_POST["catBlogDescripcionN"]), 'CatBlogFecha'=> $fecha, 'Orden' => $_POST["catBlogOrdenN"] );
                    $entradaIngresado = classBlogM::insertarEntradaBlog($Datos);
                } else {
                    $catBlogImgSinProcesar = "vistas/img/usuarios/default.png";
                    $fecha = date("Y-m-d H:i:s");
                    $Datos = array('CatBlogTitulo'=> utf8_encode($_POST["catBlogTituloN"]),'CatBlogImg'=> $catBlogImgSinProcesar , 'CatBlogDescripcion'=> utf8_encode($_POST["catBlogDescripcionN"]), 'CatBlogFecha'=> $fecha, 'Orden' => $_POST["catBlogOrdenN"] );
                    $entradaIngresado = classBlogM::insertarEntradaBlog($Datos);
                }
                    if ($entradaIngresado) {
                       echo '<script>window.location = "Blog";</script>';
                    }else{
                        echo "<script>console.log('error al insertarse ' + ".$entradaIngresado.");</script>";
                    }
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }   
    }

    public function eliminarEntradaBlogC(){
        try {
            if (isset($_GET["codDl"])) {
                $codEliminar = $_GET["codDl"];
                $entradaEliminada = classBlogM::eliminarEntradaBlogM($codEliminar);
                if ($entradaEliminada) {
                    echo '<script>window.location="Blog";</script>';
                } else {
                    echo '<script>console.log("ocurrio un error al eliminar " + ' . $entradaEliminada . ')</script>';
                }
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public static function mostrarEntradaBlogC($valor){
        try {
            $cargarEntrada = classBlogM::cargarEntradaBlogM($valor);
            return $cargarEntrada;
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public function actualizarEntradaBlogC(){
        try {
            if (isset($_POST["catBlogTituloE"])) {
                $imagenPostBlog = $_POST["catBlogCurrentImgE"];
               if (isset($_FILES["catBlogImgE"]["tmp_name"]) && !empty($_FILES["catBlogImgE"]["tmp_name"])) {
                    if (isset($_POST["catBlogCurrentImgE"]) && !empty($_POST["catBlogCurrentImgE"])) {
                            unlink($_POST["catBlogCurrentImgE"]);
                    }
                        if ($_FILES["catBlogImgE"]) {
                            $imagenPostBlog = EditImg::imgEditarBlog("catBlogImgE");
                        }
               }
                $fecha = date("Y-m-d H:i:s");
                $Datos = array('id'=>$_POST["catBlogCodE"],'CatBlogTitulo' => utf8_encode($_POST["catBlogTituloE"]), 'CatBlogImg' => $imagenPostBlog, 'CatBlogDescripcion' => utf8_encode($_POST["catBlogDescripcionE"]), 'CatBlogFecha' => $fecha, 'Orden' => $_POST["catBlogOrdenE"]);
                $actualizarEntradaBlog = classBlogM::actualizarEntradaBlogM($Datos);
                if ($actualizarEntradaBlog) {
                    echo '<script>window.location="Blog";</script>';
                }else {
                    echo 'Ocurrio un error, Intente luego';
                }
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>
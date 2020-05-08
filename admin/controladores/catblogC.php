<?php
class classBlogC{
    public function mostrarListaBlogC(){
        try {
            $listaEntradas = classBlogM::cargarListaEntradasM();
            foreach ($listaEntradas as $key => $value) {
                echo '<tr>
                            <td>'.$value['id'].'</td>
                            <td>'. utf8_decode($value['CatBlogTitulo']).'</td>
                            <td><img src="'. $value['CatBlogImg'].'" alt="imagen a mostrar" width="100px"></td>
                            <td>'. utf8_decode($value['CatBlogDescripcion']).'</td>
                            <td>'.$value['CatBlogFecha'].'</td>
                            <th>'.$value['Orden'].'</th>
                            <td>
                                <div class="btn btn-group">
                                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger eliminarEntrada" blgidCln="'. $value['id'].'"><i class="fa fa-times"></i></button>
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
                    $catBlogImgSinProcesar = "vistas/img/usuarios/defecto.png";
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
                $entradaEliminada = classBlogM::eliminarEntradaBlog($codEliminar);
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
}
?>
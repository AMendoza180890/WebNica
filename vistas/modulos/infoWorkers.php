<?php
try {
    $worker = new EmpleadoC();
    $workerC = $worker::empleadoCont();
    for ($i = 0; $i < count($workerC); $i++) {
        echo '<div class="col-md-4">
                <div class="fa-container">
                    <img class="img-responsive" src="vistas/assets/images/' . $workerC[$i]->CatEmpImagen . '">
                    <i class="fa fa-comment-o fa-3x enable" aria-hidden="true"> </i>
                </div>
                <div class="text-center">';
                    echo '<h3>' . utf8_encode($workerC[$i]->CatEmpNombres) . " " . utf8_encode($workerC[$i]->CatEmpApellidos) . '</h3>
                </div>'; 
                echo '<div>
                    <p class="noto text-center">
                    '.utf8_encode($workerC[$i]->CatEmpVocacion) . '<br>'.utf8_encode($workerC[$i]->CatEmpEmail) . '<br>'.utf8_encode($workerC[$i]->CatEmpDescription).'
                    </p>
                    </div>
            </div>';
    }
} catch (exception $ex) {
    mensajes::error($ex);
}

?>
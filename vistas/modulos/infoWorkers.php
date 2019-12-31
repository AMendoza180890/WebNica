<?php
$worker = new EmpleadoC();
$workerC = $worker::empleadoCont();
    for ($i=0; $i < 3; $i++) {         
        echo '<div class="col-md-4">';
        echo '<div class="fa-container">';
        echo '<img class="img-responsive" src="vistas/assets/images/' . $workerC[$i]->CatEmpImagen . '">';
        echo '<i class="fa fa-comment-o fa-3x enable" aria-hidden="true"></i>';
        echo '</div>';
        echo '<div class="text-center">';
        echo '<h3>' . utf8_encode($workerC[$i]->CatEmpNombres). '</h3>';
        echo '</div>';
        echo '<div>';
        echo '<p class="text-center">';
        echo utf8_encode($workerC[$i]->CatEmpVocacion). '<br>';
        echo utf8_encode($workerC[$i]->CatEmpEmail).'<br>';
        echo utf8_decode($workerC[$i]->CatEmpDescription);
        echo '</p>';
        echo '</div>';
        echo '</div>';
    }
?>
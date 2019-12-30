<?php
$worker = new EmpleadoC();
$workerC = $worker::empleadoCont();
/*
$picture = ['Luci1.svg', 'Edelma2.svg', 'Allan1.svg'];
$name = ['Lucia Silva', 'Edelma Reyes', 'Allan Mendoza'];
$vocation = ['Lic. En Diseño Gráfico.', 'Lic. Comunicación Social', 'Ing. En Computación y Telemática.'];
$Email = ['lucia@web-nica.com', 'edelma@web-nica.com', 'allan@web-nica.com'];
$Description =['Pendiente', '<small> Dos años de experiencia en redacción web en el periódico El Nuevo Diario. Actualmente labora como Content Manager en Origami Brand Studio.</small>',
    '<small> Cuatro años de responsable de Tecnología en ONG Tesoros de Dios.<br> Desarrollador web y de aplicaciones de escritorio.</small>'];
    */
    for ($i=0; $i < count($workerC); $i++) {         
        echo '<div class="col-md-4">';
        echo '<div class="fa-container">';
        echo '<img class="img-responsive" src="vistas/assets/images/' . $workerC[$i]->CatEmpImagen . '">';
        echo '<i class="fa fa-comment-o fa-3x enable" aria-hidden="true"></i>';
        echo '</div>';
        echo '<div class="text-center">';
        echo '<h3>' . $workerC[$i]->CatEmpNombres. '</h3>';
        echo '</div>';
        echo '<div>';
        echo '<p class="text-center">';
        echo $workerC[$i]->CatEmpVocacion. '<br>';
        echo $workerC[$i]->CatEmpEmail.'<br>';
        echo $workerC[$i]->CatEmpDescription;
        echo '</p>';
        echo '</div>';
        echo '</div>';
    }

?>
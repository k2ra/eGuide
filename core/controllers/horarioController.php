<?php
 if(isset($_SESSION['user'])) {
    require ('core/models/class.Horario.php');
    $horario = new Horario();

    switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
        case 'list':
            $resp = $horario->MuestraHorario();
            header('Content-type: application/json');
                echo json_encode($resp); 
        break;
        default:
                include(HTML_DIR . 'profile/profile.php');
                echo 'no encontre';
        break;
    }

 }else{

 }
?>
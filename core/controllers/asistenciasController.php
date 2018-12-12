<?php
require('core/models/class.Common.php');
require('core/models/class.Asistencias.php');
$common = new Common();
$asistencias= new Asistencias();

if (isset($_SESSION['user']) && isset($_SESSION['role'])){
    if($_SESSION['role']==2){
        switch(isset($_GET['mode']) ? $_GET['mode'] : null){
            case 'add':
                $resp = $asistencias->addAsistencias();
                echo $resp;
            break;
            default:
                $resp = $common->listaGruposXProfesor();
                include (HTML_DIR.'ProfesorModule/asistencia/asistencias.php');
                echo json_encode($resp); 
            break;

        }
    }
}


?>
<?php
require('core/models/class.Common.php');
require('core/models/class.Profesores.php');
$common = new Common();
$profesores= new Profesores();

if (isset($_SESSION['user']) && isset($_SESSION['role'])){
    if($_SESSION['role']==2){
        switch(isset($_GET['mode']) ? $_GET['mode'] : null){
            default:
                $resp = $common->listaGruposXProfesor();
                include (HTML_DIR.'ProfesorModule/asistencia/asistencias.php');
                echo json_encode($resp); 
            break;

        }
    }
}


?>
<?php
require('core/models/class.Common.php');
require('core/models/class.Profesores.php');
$common = new Common();
$profesores= new Profesores();

if (isset($_SESSION['user']) && isset($_SESSION['role'])){
    if($_SESSION['role']==2){
        switch(isset($_GET['mode']) ? $_GET['mode'] : null){
            case 'getAssignment':
                $resp = $profesores->getEvents();
                echo json_encode($resp);        
    
            break;

            case 'add':
                if($_POST){
                    $resp = $profesores->addEvents();
                    echo $resp; 
                    
                }
        
            break;
            case 'listarTipoAsignacion':
                $resp = $common->listaTipoAsignacion();
                echo json_encode($resp); 
            // print_r($resp);
            break;
            case 'hideDays':
                $resp = $common->hideDays($_GET['grupo']);
                echo json_encode($resp); 

            break;
            default:
                $resp = $common->listaGruposXProfesor();
                include (HTML_DIR.'profesorModule/asignaciones/asignacionesProfesor.php');
                echo json_encode($resp); 
            break;
        }
    }else{
        header('location: ?view=error');
    }
}else{
    header('location: ?view=login');
}
?>
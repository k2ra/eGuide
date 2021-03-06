<?php
require('core/models/class.Common.php');
require('core/models/class.Calificaciones.php');
$common = new Common();
$calificaciones = new Calificaciones();

if (isset($_SESSION['user']) && isset($_SESSION['role'])){
    if($_SESSION['role']==2){
        switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
            case 'listarEstudiantesXGrupo':
            
                $resp = $common->listaEstudianteXGrupo($_GET['cod']);
                echo json_encode($resp); 
            break;

            case 'add':
                $resp = $calificaciones->agregarNotas();
                echo $resp;
            break;

            default:
                $resp = $common->listaGruposXProfesor();
                //header('Content-type: application/json');
                include (HTML_DIR.'profesorModule/calificaciones/calificaciones.php');
                //echo json_encode($resp); 
            break;
        }

    }else{
        header('location: ?view=error');
    }
}else{
    header('location: ?view=login');
}

?>
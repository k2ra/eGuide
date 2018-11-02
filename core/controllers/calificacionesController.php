<?php
require('core/models/class.Calificaciones.php');
$calificaciones = new Calificaciones();

if (isset($_SESSION['user']) && isset($_SESSION['role'])){
    if($_SESSION['role']==2){
        switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
            case 'listarEstudiantesXGrupo':
            
                $resp = $calificaciones->listaEstudianteXGrupo($_GET['cod']);
                echo json_encode($resp); 
            break;

            default:
                $resp = $calificaciones->listaGruposXProfesor();
                //header('Content-type: application/json');
                include (HTML_DIR.'profesorModule/calificaciones/calificaciones.php');
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
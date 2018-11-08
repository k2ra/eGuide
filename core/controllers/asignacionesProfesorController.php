<?php
require('core/models/class.Common.php');
$common = new Common();

if (isset($_SESSION['user']) && isset($_SESSION['role'])){
    if($_SESSION['role']==2){
        $resp = $common->listaGruposXProfesor();
        include (HTML_DIR.'profesorModule/asignaciones/asignacionesProfesor.php');
        echo json_encode($resp); 
    }else{
        header('location: ?view=error');
    }
}else{
    header('location: ?view=login');
}
?>
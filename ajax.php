<?php
//if($_POST){
	require('core/core.php');
	switch (isset($_GET['view'])? $_GET['view']: null) {
        case 'calificaciones':
			require('core/controllers/calificacionesController.php');
			//echo 'aqui llegue';
		break;
		case 'asignacionesProfesor':
           
			require('core/controllers/asignacionesProfesorController.php');
		break;
		case 'asistencias':
			require('core/controllers/asistenciasController.php');
			
		break;
		default:
			header('location:index.php');
			
		break;
	}
//}else{
//	header('location:index.php');
//}
?>

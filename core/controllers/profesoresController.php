<?php

 if(isset($_SESSION['user'])) {
    require ('core/models/class.Profesores.php');
    $profesores  = new Profesores();
    
    switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
      case 'list':
       $resp = $profesores->listaProfesores();
       header('Content-type: application/json');
        echo json_encode($resp); 
      break;
      default:
          include(HTML_DIR . 'profile/profile.php');
          //header('location: ?view=perfil');
          echo 'no encontre';
      break;  
    }

 } else {
   header('location: ?view=login');
 }	
	
	
	
?>
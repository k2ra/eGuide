<?php

  if(isset($_SESSION['user']) && $_SESSION['role']==3) {
    require ('core/models/class.Perfil.php');
    $perfil  = new Perfil();
    

      switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
        case 'asignaciones' :
          $resp = $perfil->getAssignments();
          header('Content-type: application/json');
          echo json_encode($resp); 
        break;

        default:
          $resp = $perfil->getPersonalInformation();
          include(HTML_DIR . 'profile/profile.php');
                
        break;
      }


  } else {
    header('location: ?view=login');
  }	
	
	
	
?>
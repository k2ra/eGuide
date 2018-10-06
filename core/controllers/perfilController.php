<?php

  if(isset($_SESSION['user'])) {
    require ('core/models/class.Perfil.php');
    $perfil  = new Perfil();
    

      switch (isset($_GET['mode']) ? $_GET['mode'] : null) {

        default:
          $resp = $perfil->getPersonalInformation();
          include(HTML_DIR . 'profile/profile.php');
                
        break;
      }


  } else {
    header('location: ?view=login');
  }	
	
	
	
?>
<?php

  require('core/models/class.Login.php');
  $login = new Login();

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'validar':
      if($_POST) {
        $resp = $login->validaCredenciales();
        if($resp == false){
            header('location: ?view=login&mode=validar&error=true');
        }
        else{
            if($_SESSION['role'] == 3){
              header('location: ?view=perfil');
            }else if($_SESSION['role'] == 2){

            }elseif($_SESSION['role'] == 1){

            }
        }
      } else {
        include(HTML_DIR . 'login/login.php');
      }
    break;
    default:
      include(HTML_DIR . 'login/login.php');
    break;
  }

    
?>
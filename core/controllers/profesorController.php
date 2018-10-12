<?php
 if (isset($_SESSION['user']) && isset($_SESSION['role'])){
    if($_SESSION['role']==2){
         //require('core/models/');
         switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
             default:
                 include(HTML_DIR . 'ProfesorModule/home/home.php');
             break;
         }

    }else{
        header('location: ?view=error');
    }

 }else{
    header('location: ?view=login');
 }


?>
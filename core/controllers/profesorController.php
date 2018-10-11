<?php
 if (isset($_SESSION['user'])){
    //require('core/models/');
    switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
        default:
            include(HTML_DIR . 'ProfesorModule/home/home.php');
        break;
    }

 }else{
    header('location: ?view=login');
 }


?>
<?php

 if(isset($_SESSION['user'])) {
	//require ('core/models/class.Home.php');
	//$home  = new Home();

	//	$resp = $home->misEncuestas();
        include(HTML_DIR . 'profile/profile.php');
        //header('location: ?view=perfil');

 } else {
   header('location: ?view=login');
 }	
	
	
	
?>
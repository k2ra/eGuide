<?php

session_start();

define('DB_HOST','localhost');
define('DB_USER','guideAdmin');
define('DB_PASS','guideAdmin01');
define('DB_NAME','schooldb');
/*produccion
define('DB_USER','solution_survey');
define('DB_PASS','solution_survey');
define('DB_NAME','solution_survey');
*/
define('HTML_DIR','html/');
//define('APP_URL','http://'. $_SERVER['SERVER_NAME'].'/demos/encuesta/');
//define('APP_URL','http://'. $_SERVER['SERVER_NAME'].'/encuesta/');


require('core/models/class.Conexion.php');
/*require('core/models/class.phpmailer.php');
require('core/models/class.smtp.php');
require('core/bin/functions/CorreoTemplate.php');
require('core/bin/functions/cifrado.php');
require ('core/bin/functions/separadorCorreos.php');*/
?>
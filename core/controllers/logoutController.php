<?php
//unset($_SESSION['user']));
unset($_SESSION['user']);
unset($_SESSION['id_usuario']) ;
unset($_SESSION['id']) ;///id del educador
unset($_SESSION['role']);

header('location: ?view=login');
?>

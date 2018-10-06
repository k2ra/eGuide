<?php

class Login {

  private $user;
  private $password;
  private $db;

  public function __construct() {
    $this->db = new Conexion();
  }
  
  private function Errors($url) {
    try {

	  if(empty($_POST['name'])||empty($_POST['password'])) {
        throw new Exception(1);
      } else {
		$this->user = $this->db->real_escape_string($_POST['name']);
        $this->password = $this->db->real_escape_string($_POST['password']);

      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }
  
  public function validaCredenciales() {

      $this->Errors('?view=login&mode=validar&error=');
      $sql = $this->db->query("SELECT id_usuario,nombre,fk_IdRole,rol FROM tbl_usuarios WHERE usuario='$this->user' AND clave = '$this->password' LIMIT 1;");
		if($this->db->rows($sql) > 0) {
			$data = $this->db->recorrer($sql);

      $_SESSION['user'] = $data['nombre'];
      $_SESSION['id_usuario'] = $data['id_usuario'];
      $_SESSION['id'] = $data['fk_IdRole'];
      $_SESSION['role'] = $data['rol'];
    // print_r($_SESSION['user']);
      //header('location: ?view=perfil');
      return $data;
		} else {
			 //header('location: ?view=login&mode=validar&error=true');
       return false;
		}
		  $this->db->liberar($sql);

}


  public function __destruct() {
    $this->db->close();
 }
}



?>
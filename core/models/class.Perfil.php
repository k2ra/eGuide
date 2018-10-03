<?php
class Perfil{
    public function __construct() {
		$this->db = new Conexion();
    }

    public function getPersonalInformation(){
        $id = $_SESSION['id'];
        $sql = $this->db->query("");
    }

}
?>
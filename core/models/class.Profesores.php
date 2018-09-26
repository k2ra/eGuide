<?php

class Profesores{

    public function __construct() {
		$this->db = new Conexion();
    }
    
    public function listaProfesores(){
        $sql = $this->db->query("SELECT * FROM tbl_educadores WHERE estado =1");
			
       if($this->db->rows($sql) > 0) {
            while($data = $this->db->recorrer($sql)) {
                $resp[] = $data;
            }
            //include(HTML_DIR . 'unity/addUnity.php');
        }
        else
        {
            $resp = false;
            //header('location: ?view=department&mode=add');
        }
        return $resp;

    }

}

?>
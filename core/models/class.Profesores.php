<?php

class Profesores{

    public function __construct() {
		$this->db = new Conexion();
    }
    
    public function listaProfesores(){
        $id = $_SESSION['id'];
        $sql = $this->db->query("SELECT c.nombres as nombres,c.apellidos as apellidos,d.descripcion as cod_materia FROM tbl_estudiante_grupo a,tbl_materias_grupo b,tbl_educadores c, tbl_materia d where a.fk_estudianteId='$id' and a.fk_grupoId=b.fk_grupo and b.fk_materia=c.cod_materia and c.cod_materia =d.cod_materia and c.estado=1");
			
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
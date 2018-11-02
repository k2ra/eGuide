<?php
Class Calificaciones{

    public function __construct() {
		$this->db = new Conexion();
    }

    public function listaGruposXProfesor(){
        $sql =$this->db->query ("SELECT (SELECT descripcion FROM tbl_grupos WHERE id_grupo =fk_grupo ) as grupo, c.fk_grupo as id FROM tbl_educadores a, tbl_materia b,tbl_materias_grupo c where a.id_educador=1 AND a.id_educador = b.fk_educador AND b.cod_materia= c.fk_materia" );
    
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

    public function listaEstudianteXGrupo($grupo){
        $sql =$this->db->query ("SELECT a.descripcion as grupo, c.id_estudiante as id_estudiante,CONCAT(c.nombre,' ',c.apellido) as nombre FROM tbl_grupos a, tbl_estudiante_grupo b, tbl_estudiantes c WHERE id_grupo='$grupo' AND a.id_grupo= b.fk_grupoId AND c.id_estudiante= b.fk_estudianteId" );
    
        if($this->db->rows($sql) > 0) {
            while($data = $this->db->recorrer($sql)) {
                $resp[] = $data;
            }
           
        }
        else
        {
            $resp = false;
           
        }
        return $resp;
    }
}

?>
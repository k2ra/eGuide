<?php

class Profesores{

    public function __construct() {
        $this->db = new Conexion();
        $this->id =$_SESSION['id'];
    }
    
    public function listaProfesores(){
        $id = $_SESSION['id'];
        $sql = $this->db->query("SELECT c.nombres as nombres,c.apellidos as apellidos,d.descripcion as cod_materia FROM tbl_estudiante_grupo a,tbl_materias_grupo b,tbl_educadores c, tbl_materia d where a.fk_estudianteId=1 and a.fk_grupoId=b.fk_grupo and d.fk_educador=c.id_educador and b.fk_materia=d.cod_materia and c.estado=1");
			
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

    public function addEvents(){
       $materia = $this->db->real_escape_string($_POST['materia']);
       $fecha = $this->db->real_escape_string($_POST['fecha']);
       $grupo = $this->db->real_escape_string($_POST['grupo']);
       $tipoAsig = $this->db->real_escape_string($_POST['tipoAsig']);
       $descripcion = $this->db->real_escape_string($_POST['descripcionTarea']);
       
        $this->db->query("INSERT INTO tbl_asignaciones SET cod_materia= $materia, fk_hora='11', fk_grupo= '$grupo', tipo_asignacion=$tipoAsig,descripcion= '$descripcion', fecha_asignacion= '$fecha'");
			
        if($this->db->affected_rows>0){
        	$resp = true;
        } 
        else {
            $resp = false;
        }
        return $resp;

    }

}

?>
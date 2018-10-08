<?php
class Perfil{
    public function __construct() {
		$this->db = new Conexion();
    }

    public function getPersonalInformation(){
        $id = $_SESSION['id'];
        $role = $_SESSION['role'];
        $sql = $this->db->query("SELECT a.nombre as nombre, a.apellido as apellido,c.descripcion as role,d.descripcion as grupo FROM tbl_estudiantes a, tbl_estudiante_grupo b, tbl_role c, tbl_grupos d  where id_estudiante='$id' and a.id_estudiante=b.fk_estudianteId and c.id_role='$role' and b.fk_grupoId= d.id_grupo");

        if($this->db->rows($sql) > 0) {
			$data = $this->db->recorrer($sql);

            $_SESSION['nombre'] = $data['nombre']." ".$data['apellido'];
            $_SESSION['desrole'] = $data['role'];
            $_SESSION['grupo'] = $data['grupo'];
            
            return $data;
        } else {
            return false;
        }
    }

    public function getAssignments(){
        $id = $_SESSION['id'];

        $sql = $this->db->query("SELECT e.dia as dia,b.descripcion as materia,concat( c.nombres,' ',c.apellidos) as nombre,d.tipo_actividad as tipo,d.descripcion as descripcion  FROM tbl_estudiante_grupo a,tbl_materia b,tbl_educadores c,tbl_asignaciones d, tbl_horario e WHERE a.fk_estudianteId ='$id' and b.fk_educador= c.id_educador and b.cod_materia= d.cod_materia and a.fk_grupoId = d.fk_grupo and e.id_horario=d.fk_hora");

        if($this->db->rows($sql) > 0) {
			while($data = $this->db->recorrer($sql)) {

                $resp[] =  $data;
            }
        } else {
            $resp = false;
        }
        return $resp;
    }

}
?>
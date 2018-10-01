<?php
class Horario{
    public function __construct(){
        $this->db = new Conexion();
    }

    public function MuestraHorario(){
        $sql = $this->db->query("SELECT ID_HORARIO,HORAINICIO,HORAFINAL,DIA,DESCRIPCION FROM tbl_estudiante_grupo a,tbl_horario b,tbl_horario_semanal c,tbl_materia d where a.fk_estudianteId = 1 AND a.fk_grupoId = c.fk_grupo AND d.cod_materia =c.fk_materia AND b.id_horario =c.cod_horario ORDER by substring(ID_HORARIO,-1)");

        if($this->db->rows($sql) > 0) {
            while($data = $this->db->recorrer($sql)) {

                $resp[] =  $data;
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
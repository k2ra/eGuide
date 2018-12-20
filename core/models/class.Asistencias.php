<?php
class Asistencias {
 
    public function __construct() {
        $this->db = new Conexion();
        $this->id =$_SESSION['id'];
    }
    

    public function addAsistencias(){
        
        $lista = json_decode($_POST['listAsistencia'],true);
        foreach($lista as $obj => $value){
            $estudiante = $value['id'];
            $asistencia = $value['asistencia'];
            $this->db->query("INSERT INTO tbl_asistencia SET id_estudiante= $estudiante, asistencia = $asistencia, educador= $this->id");
                 
            if($this->db->affected_rows>0){
                 $resp = true;
            } 
            else {
                $resp = false;
            }
            echo $resp;
        }
        // return $resp;
    }

    public function checkAsistenciaDiaria(){
        $sql = $this->db->query("");
        
    }
}
?>